<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GolfBooking\Models\TimeSlot;

class TimeSlotSeeder extends Seeder
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
                'time' => '7:05',
                'max_player' => 3,
                'time_type' => 'AM',
            ],
            [
                'time' => '7:13',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '7:21',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '7:29',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '7:37',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '7:53',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:01',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:09',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:17',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:25',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:33',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:41',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:49',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '8:57',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '9:05',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '9:13',
                'max_player' => 4,
                'time_type' => 'AM',
            ],
            [
                'time' => '12:05',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '12:13',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '12:21',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '12:29',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '12:37',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '12:53',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:01',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:09',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:17',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:25',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:33',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:41',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:49',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '01:57',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '02:05',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
            [
                'time' => '02:13',
                'max_player' => 4,
                'time_type' => 'PM',
            ],
        ];

        foreach ($time_slots as $key => $time_slot) {
            TimeSlot::create($time_slot);
        }
    }
}
