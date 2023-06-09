<?php

namespace Modules\GolfBooking\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Modules\GolfBooking\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = collect(json_decode(File::get('Modules/Golfbooking/Database/json/accounts.json'), true));

        foreach ($accounts as $key => $account) {
            Account::create($account);
        }
    }
}
