<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [['name' => 'user_management_access',], ['name' => 'permission_create',], ['name' => 'permission_edit',], ['name' => 'permission_show',], ['name' => 'permission_delete',], ['name' => 'permission_access',], ['name' => 'role_create',], ['name' => 'role_edit',], ['name' => 'role_show',], ['name' => 'role_delete',], ['name' => 'role_access',], ['name' => 'user_create',], ['name' => 'user_edit',], ['name' => 'user_show',], ['name' => 'user_delete',], ['name' => 'user_access',],];

        Permission::insert($permissions);
    }
}
