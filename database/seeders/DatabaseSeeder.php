<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Test2 User',
            'email' => 'test2@test.com',
            'is_admin' => false,
        ]);
        Listing::factory(15)->create([
            'by_user_id' => 1
        ]);
    }
}
