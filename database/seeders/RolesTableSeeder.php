<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [['name' => 'admin',], ['name' => 'editor',], ['name' => 'author'],];

        Role::insert($roles);
    }
}
