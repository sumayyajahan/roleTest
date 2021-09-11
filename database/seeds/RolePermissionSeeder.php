<?php

use Illuminate\Database\Seeder;

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
        $roleAdmin = Role::create(['nam' => 'admin']);

        //for permission list
        $permissions = [

            //medimate app permissions
            'backend.create',
            'backend.view',
            'backend.edit',
            'backend.delete',
            'backend.approve',
        ];
    }
}
