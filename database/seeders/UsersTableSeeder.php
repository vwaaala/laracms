<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'admin@bunk3r.net', 'avatar' => 'avatar.png', 'password' => bcrypt('secret'), 'remember_token' => null,],];

        User::insert($users);
    }
}
