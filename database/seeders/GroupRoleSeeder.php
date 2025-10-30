<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class GroupRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermissions = [

            'group_document_create',
            'group_document_edit',
            'group_document_show',
            'group_document_access',

        ];


        foreach($allPermissions as $permision){
            Permission::create([
                'name' => $permision
            ]);
        }


        $role = Role::where(['name'=> 'User'])->first();


        $userPermissions = [
            'group_document_create',
            'group_document_edit',
            'group_document_show',
            'group_document_access',

            'individual_document_create',
            'individual_document_edit',
            'individual_document_show',
            'individual_document_access',
            
            'ministry_show',
            'ministry_access',
        ];

        foreach($userPermissions as $permission){
            $role->givePermissionTo($permission);
        }
    }
}
