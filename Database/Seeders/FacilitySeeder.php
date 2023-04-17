<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GolfBooking\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facilities = [
            [
                'name' => 'Golf Course',
                'status' => '1',
                'description' => '18 or 9 Holes',
            ],
            [
                'name' => 'Tennis Court',
                'status' => '0',
                'description' => '18 or 9 Holes',
            ],
            [
                'name' => 'Hall 1',
                'status' => '0',
                'description' => 'Ballroom fit up to 60 tables',
            ],
        ];

        foreach ($facilities as $key => $facility) {
            Facility::create($facility);
        }
    }
}
