<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GolfBookingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            UserSeeder::class,
            AccountSeeder::class,
            FacilitySeeder::class,
            CourseSeeder::class,
            UnavailableDateSlotSeeder::class,
            TimeSlotSeeder::class,
            UnavailableTimeSlotSeeder::class,
            HoleSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
