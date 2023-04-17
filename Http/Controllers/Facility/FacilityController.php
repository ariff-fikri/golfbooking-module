<?php

namespace Modules\GolfBooking\Http\Controllers\Facility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GolfBooking\Models\Course;
use Modules\GolfBooking\Models\Facility;
use Modules\GolfBooking\Models\TimeSlot;
use Modules\GolfBooking\Models\UnavailableTimeSlot;

class FacilityController extends Controller
{
    public function index()
    {


        return view('golfbooking::facility-booking.index');
    }

    public function list(Request $request)
    {
        if ($request->search_facility) {
            $facilities = Facility::where('name', 'like', '%' . $request->search_facility . '%')->get();
        } else {
            $facilities = Facility::all();
        }
        $time_slots = TimeSlot::all();
        $unavailable_time_slots = UnavailableTimeSlot::whereDate('date', '>=', now())->get();
        $courses = Course::all();

        foreach ($facilities as $key => $facility) {
            $facility->today_available = 0;

            if ($facility->id == 1) {
                foreach ($courses as $key => $course) {
                    $facility->today_available = $facility->today_available + $time_slots->whereNotIn('id', $unavailable_time_slots->where('course_id', $course->id)->where('date', now()->format('Y-m-d'))->pluck('time_slot_id')->toArray())->count();
                }
            }
        }

        return view('golfbooking::facility-booking.list', compact('facilities'));
    }
}
