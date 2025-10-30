<?php

namespace Database\Seeders;

use App\Models\GroupList;
use App\Models\GroupUser;
use Illuminate\Database\Seeder;

class MDGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $secretaryUserIds= [
            12,14,15
        ];

        foreach($secretaryUserIds as $secretaryUserId){

            $count = 16;

            for ($i=16; $i < 34; $i++) { 
                $count = $count + 1;

                $groupList = new GroupList;
                $groupList->group_id = $count;
                $groupList->user_id = $secretaryUserId;
                $groupList->save();

                $groupList = new GroupUser;
                $groupList->role = 'secretary';
                $groupList->user_id = $secretaryUserId;
                $groupList->group_id = $count;
                $groupList->save();
                
            }


                

        }
    }
}
