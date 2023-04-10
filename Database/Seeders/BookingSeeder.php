<?php

namespace Modules\Golfbooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Golfbooking\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
            [
                'booking_id' => '#00000001',
                'user_id' => 3,
                'date' => now()->addDays(1),
                'course_id' => 1,
                'time_slot_id' => 1,
                'hole_id' => 1,
                'payment_status' => 1,
                'booking_status' => 1,
                'notes' => 'Need More Data',
                'total_players' => 4,
            ],
        ];

        foreach ($bookings as $key => $booking) {
            Booking::create($booking);
        }
    }
}
