<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);
        //permission list
        $permissions = [
            //dashboard
            'dashboard.view',

            //medimate app permissions
            'backend.create',
            'backend.view',
            'backend.edit',
            'backend.delete',
            'backend.approve',
        ];

        //create and assign permission
        for($i=0; $i < count($permissions); $i++){

           $permission = Permission::create(['name' => $permissions[$i]]);
           $roleSuperAdmin->givePermissionTo($permission);
           $permission->assignRole($roleSuperAdmin);

        }

    }
}
