<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermissions = [
            'user_management_access',
            'menu_management_access',
            'permission_create',
            'permission_edit',
            'permission_show',
            'permission_delete',
            'permission_access',

            'group_document_create',
            'group_document_edit',
            'group_document_show',
            'group_document_access',

            'role_create',
            'role_edit',
            'role_show',
            'role_delete',
            'role_access',

            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'user_access',

            'agency_create',
            'agency_edit',
            'agency_show',
            'agency_delete',
            'agency_access',
            
            'airport_create',
            'airport_edit',
            'airport_show',
            'airport_delete',
            'airport_access',
            
            'currency_create',
            'currency_edit',
            'currency_show',
            'currency_delete',
            'currency_access',

            'department_create',
            'department_edit',
            'department_show',
            'department_delete',
            'department_access',

            'department_document_create',
            'department_document_edit',
            'department_document_show',
            'department_document_delete',
            'department_document_access',
            
            'directorate_create',
            'directorate_edit',
            'directorate_show',
            'directorate_delete',
            'directorate_access',

            'folder_create',
            'folder_edit',
            'folder_show',
            'folder_delete',
            'folder_access',

            'general_document_create',
            'general_document_edit',
            'general_document_show',
            'general_document_delete',
            'general_document_access',

            'individual_document_create',
            'individual_document_edit',
            'individual_document_show',
            'individual_document_delete',
            'individual_document_access',
            
            'ministry_create',
            'ministry_edit',
            'ministry_show',
            'ministry_delete',
            'ministry_access',
        ];


        foreach($allPermissions as $permision){
            Permission::create([
                'name' => $permision
            ]);
        }


        Role::create(['name'=> 'Super Admin']);

        $role = Role::create(['name'=> 'User']);


        $userPermissions = [
            'user_access',
            'user_show',

            'agency_create',
            'agency_edit',
            'agency_show',
            'agency_access',
            
      
            'airport_show',
            
            'currency_show',
            
            'department_show',
            
            'department_document_create',
            'department_document_edit',
            'department_document_show',
            'department_document_access',
            
            
            'directorate_show',
            'directorate_access',

            'folder_create',
            'folder_edit',
            'folder_show',
            'folder_access',

            'general_document_create',
            'general_document_edit',
            'general_document_show',
            'general_document_access'
        ];

        foreach($userPermissions as $permission){
            $role->givePermissionTo($permission);
        }
    }
}
