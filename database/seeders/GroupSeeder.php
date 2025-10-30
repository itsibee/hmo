<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Agency;
use App\Models\Airport;
use App\Models\Currency;
use App\Models\Ministry;
use App\Models\Department;
use App\Models\Directorate;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            "name"=>'ADMIN GROUP',
            'group_send' => "YES",
            'group_receive' => "YES",
            'doc_type' => "ALL",
            'ref' => uniqid(),
        ]);

        
        Agency::create([
            "name"=>"NAMA"
        ]);

        Agency::create([
            "name"=>"NCAA"
        ]);

        Airport::create([
            "name"=>"NAIA ABUJA"
        ]);
        

        Currency::create([
            "name"=>"Naira"
        ]);

        Currency::create([
            "name"=>"Dollar"
        ]);
        

        Department::create([
            "name"=>"ICT"
        ]);
        

        Directorate::create([
            "name"=>"CS/LA"
        ]);

        Ministry::create([
            "name"=>"AVIATION"
        ]);
    }
}
