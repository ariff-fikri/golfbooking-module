<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GolfBooking\Models\Hole;

class HoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holes = [
            [
                'name' => '18 Holes',
                'member_weekday_amount' => 381.60,
                'member_weekend_amount' => 508.80,
                'visitor_weekday_amount' => 449.45,
                'visitor_weekend_amount' => 594.65,
            ],
            [
                'name' => '9 Holes',
                'member_weekday_amount' => 201.40,
                'member_weekend_amount' => 297.75,
                'visitor_weekday_amount' => 224.70,
                'visitor_weekend_amount' => 307.40,
            ],
        ];

        foreach ($holes as $key => $hole) {
            Hole::create($hole);
        }
    }
}
