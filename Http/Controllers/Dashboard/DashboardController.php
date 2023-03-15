<?php

namespace Modules\GolfBooking\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GolfBooking\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'hole', 'course', 'time_slot'])->orderBy('created_at', 'desc')->get();
        return view('golfbooking::dashboard.index', compact('bookings'));
    }

    public function view(Request $request, Booking $booking)
    {
        $booking = Booking::where('id', $booking->id)->with(['payment_detail', 'course', 'time_slot', 'hole'])->first();

        return view('golfbooking::golf-course.payment-completed', compact('booking'));
    }
}
