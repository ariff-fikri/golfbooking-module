<?php

namespace Modules\GolfBooking\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GolfBooking\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $upcoming_bookings = auth()->user()->bookings()->whereDate('date', '>=', now()->format('Y-m-d'))->with(['course', 'hole', 'time_slot'])->orderBy('date')->get();
        $past_bookings = auth()->user()->bookings()->whereDate('date', '<', now()->format('Y-m-d'))->with(['course', 'hole', 'time_slot'])->orderBy('date', 'desc')->get();

        return view('golfbooking::my-booking.index', compact('upcoming_bookings', 'past_bookings'));
    }

    public function info(Request $request, Booking $booking)
    {
        $booking = Booking::where('id', $booking->id)->with(['payment_detail', 'course', 'time_slot', 'hole'])->first();

        return view('golfbooking::golf-course.payment-completed', compact('booking'));
    }
}
