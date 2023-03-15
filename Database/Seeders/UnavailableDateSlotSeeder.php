<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GolfBooking\Models\UnavailableDateSlot;

class UnavailableDateSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_slots = [
            [
                'course_id' => 1,
                'date' => now()->addDays(2),
            ]
        ];

        foreach ($date_slots as $key => $date_slot) {
            UnavailableDateSlot::create($date_slot);
        }
    }
}
