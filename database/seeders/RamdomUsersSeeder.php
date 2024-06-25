<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RamdomUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Will make 10 random users
    public function run(): void
    {
        User::factory(10)->create();
    }
}
