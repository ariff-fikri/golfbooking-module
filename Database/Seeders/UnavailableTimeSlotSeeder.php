<?php

namespace Modules\Golfbooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Golfbooking\Models\UnavailableTimeSlot;

class UnavailableTimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time_slots = [
            [
                'time_slot_id' => 3,
                'course_id' => 2,
                'date' => now()->addDays(1),
            ],
            [
                'time_slot_id' => 6,
                'course_id' => 1,
                'date' => now()->addDays(1),
            ],
            [
                'time_slot_id' => 9,
                'course_id' => 2,
                'date' => now()->addDays(1),
            ],
            [
                'time_slot_id' => 14,
                'course_id' => 3,
                'date' => now()->addDays(1),
            ],
            [
                'time_slot_id' => 15,
                'course_id' => 2,
                'date' => now()->addDays(1),
            ]
        ];

        foreach ($time_slots as $key => $time_slot) {
            UnavailableTimeSlot::create($time_slot);
        }
    }
}
