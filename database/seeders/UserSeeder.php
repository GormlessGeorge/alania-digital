<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password')
        ]);


        //moderator
        User::create(['name' => 'Moderator',
            'email' => 'moderator@example.com',
            'password' => bcrypt('moderator'),
            'is_moderator' => 1]);
    }
}
