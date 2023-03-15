<?php

namespace Modules\GolfBooking\Http\Controllers\GolfCourse;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\GolfBooking\Models\Booking;
use Modules\GolfBooking\Models\BookingPlayer;
use Modules\GolfBooking\Models\Course;
use Modules\GolfBooking\Models\Hole;
use Modules\GolfBooking\Models\PaymentDetail;
use Modules\GolfBooking\Models\TimeSlot;
use Modules\GolfBooking\Models\UnavailableDateSlot;
use Modules\GolfBooking\Models\UnavailableTimeSlot;

class GolfCourseController extends Controller
{
    public function index()
    {
        $startDate = now()->clone()->startOfDay();
        $endDate = now()->clone()->addDays(7)->endOfDay();
        $courses = Course::all();
        $holes = Hole::all();
        $time_slots = TimeSlot::all();
        $unavailable_date = UnavailableDateSlot::whereDate('date', '>=', now())->get();
        $unavailable_time_slots = UnavailableTimeSlot::whereDate('date', '>=', now())->get();
        $today_available = 0;

        $dates =  collect(CarbonPeriod::create($startDate, $endDate)->toArray())
            ->map(function ($eachCarbonDate) use ($time_slots, $unavailable_time_slots) {
                return (object)[
                    'date_available' => $eachCarbonDate->format('Y-m-d'),
                    'time_slots_count' => $time_slots->whereNotIn('id', $unavailable_time_slots->where('date', $eachCarbonDate->format('Y-m-d'))->pluck('time_slot_id')->toArray())->count(),

                ];
            });

        foreach ($courses as $key => $course) {
            $today_available = $today_available + $time_slots->whereNotIn('id', $unavailable_time_slots->where('course_id', $course->id)->where('date', now()->format('Y-m-d'))->pluck('time_slot_id')->toArray())->count();
        }

        return view('golfbooking::golf-course.index', compact('dates', 'unavailable_date', 'courses', 'unavailable_time_slots', 'time_slots', 'holes', 'today_available'));
    }

    public function getTimeType(Request $request)
    {
        $time_slots = TimeSlot::where('time_type', $request->time_type)->with(['unavailable_time_slots'])->get();
        $unavailable_time_slots = UnavailableTimeSlot::where('date', $request->date)->where('course_id', $request->course_id)->get();

        $booked_time_slots = Booking::where('date', $request->date)->get();

        foreach ($time_slots as $key => $time_slot) {
            if ($booked_time_slots->where('time_slot_id', $time_slot->id)->count() >= 2) {
                $booked_slot = [
                    'course_id' => $request->course_id,
                    'time_slot_id' => $time_slot->id,
                    'date' => $request->date,
                ];

                $unavailable_time_slots->push($booked_slot);
            }
        }

        return response()->json(['status' => 'success', 'time_slots' => $time_slots, 'unavailable_time_slots' => $unavailable_time_slots]);
    }

    public function getHolesAvailable(Request $request)
    {
        $bookings = Booking::where('date', $request->date)->where('time_slot_id', $request->time_slot_id)->get()->pluck('hole_id');

        $time_slot = TimeSlot::where('id', $request->time_slot_id)->first();

        $selectedDate = Carbon::createFromFormat('Y-m-d', $request->date);

        $time_slot->min_player = $selectedDate->isWeekend() ? 3 : $time_slot->min_player;

        $time_slot->isWeekend = $selectedDate->isWeekend() ? true : false;

        $available_holes = Hole::whereNotIn('id', $bookings)->get();

        return response()->json(['status' => 'success', 'available_holes' => $available_holes, 'time_slot' => $time_slot]);
    }

    public function store(Request $request, Booking $booking, BookingPlayer $bookingPlayer, PaymentDetail $paymentDetail, UnavailableTimeSlot $unavailableTimeSlot)
    {
        DB::beginTransaction();

        $booking = $booking->create($request->all() + ['total_players' => count($request->players), 'payment_status' => '1']);

        $paymentDetail->create($request->except('booking_id') + ['booking_id' => $booking->id]);

        foreach ($request->players as $key => $player) {
            $player = (object)($player);

            $bookingPlayer->create(['name' => $player->name, 'booking_id' => $booking->id, 'member_id' => $player->type == 'member' ? $player->id : null,]);
        }

        DB::commit();

        return redirect()->route('golf-course.payment-completed', $booking->id);
    }

    public function paymentCompleted(Request $request, Booking $booking)
    {
        $booking = Booking::where('id', $booking->id)->with(['payment_detail', 'course', 'time_slot', 'hole'])->first();

        return view('golfbooking::golf-course.payment-completed', compact('booking'));
    }
}
