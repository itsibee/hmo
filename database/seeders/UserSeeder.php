<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use App\Models\Agency;
use App\Models\Airport;
use App\Models\Currency;
use App\Models\Ministry;
use App\Models\GroupList;
use App\Models\Department;
use App\Models\Directorate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
            'name' => "Ibrahim Usman",
            'email' => "itsibee@gmail.com",
            'phone' => "08112237438",
            'odc' => "12233455",
            'department_id' => "1",
            'uid' => uniqid(),
            'app_notification_id' =>"12345",
            'password' => Hash::make('200000'),
        ]);

        $user->assignRole('Super Admin');

        $user = User::create([
            'name' => "Michael Tase",
            'email' => "tasemgt@gmail.com",
            'phone' => "08062254916",
            'odc' => "1223345",
            'department_id' => "1",
            'uid' => uniqid(),
            'app_notification_id' =>"12345",
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('Super Admin');

        $user = User::create([
            'name' => "Yakubu Bello",
            'email' => "yaksmb@gmail.com",
            'phone' => "08034051868",
            'odc' => "122334",
            'department_id' => "1",
            'uid' => uniqid(),
            'app_notification_id' =>"12345",
            'password' => Hash::make('Password@1'),
        ]);

        $user->assignRole('Super Admin');

        $user = User::create([
            'name' => "Olasoji Olatunji",
            'email' => "olasoji.olatunji@faan.gov.ng",
            'phone' => "08136411641",
            'odc' => "12233",
            'department_id' => "1",
            'uid' => uniqid(),
            'app_notification_id' =>"12345",
            'password' => Hash::make('Password@2'),
        ]);

        $user->assignRole('Super Admin');


        
        
        
    }
}
