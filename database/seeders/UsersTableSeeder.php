<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $editorRole = Role::where('name', 'editor')->first();
        $authorRole = Role::where('name', 'author')->first();

        // deleting user table data
        User::truncate();

        $admin = User::create([
            'first_name'=> 'John',
            'last_name'=> 'Doe',
            'avatar' => 'null',
            'email' => 'admin@bunk3r.net',
            'password' => bcrypt('secret')
        ]);

        $editor = User::create([
            'first_name'=> 'John',
            'last_name'=> 'John',
            'avatar' => 'null',
            'email' => 'editor@bunk3r.net',
            'password' => bcrypt('secret')
        ]);

        $author = User::create([
            'first_name'=> 'Doe',
            'last_name'=> 'Doe',
            'avatar' => 'null',
            'email' => 'author@bunk3r.net',
            'password' => bcrypt('secret')
        ]);

        // assign role
        $admin->roles()->attach($adminRole);
        $editor->roles()->attach($editorRole);
        $author->roles()->attach($authorRole);
    }
}
