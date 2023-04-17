<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\GolfBooking\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => '1st Nine',
                'description' => '1st Nine',
                'facility_id' => 1,
            ],
            [
                'name' => '2nd Nine',
                'description' => '2nd Nine',
                'facility_id' => 1,
            ],
            [
                'name' => '3rd Nine',
                'description' => '3rd Nine',
                'facility_id' => 1,
            ],
        ];

        foreach ($courses as $key => $course) {
            Course::create($course);
        }
    }
}
