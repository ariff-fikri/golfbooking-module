<?php

namespace Modules\GolfBooking\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Modules\GolfBooking\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect(json_decode(File::get('Modules/GolfBooking/database/json/users.json'), true));

        foreach ($users as $key => $user) {
            User::create($user + ['password' => env('DEFAULT_PASSWORD_SEEDER')]);
        }
    }
}
