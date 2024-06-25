<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OriginalUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Will create users with their own credentials
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Isaac',
            'email' => 'isaacjacome9@gmail.com',
            'password' => Hash::make('isaacdavid1234'),
        ]);
        User::factory()->create([
            'name' => 'Nathan',
            'email' => 'ospinonathan@gmail.com',
            'password' => Hash::make('Nathan090410'),
        ]);
    }
}
