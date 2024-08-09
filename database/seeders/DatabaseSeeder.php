<?php

namespace Database\Seeders;
use App\Models\Actor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Actor::factory()->create([
            'fname' => 'Ryan',
            'lname' => 'Gosling',
            'country' => 'Canada',
        ]);

        Actor::factory()->create([
            'fname' => 'Margot',
            'lname' => 'Robbie',
            'country' => 'Australia',
        ]);

        Actor::factory()->create([
            'fname' => 'Leonardo',
            'lname' => 'Dicaprio',
            'country' => 'United States',
        ]);

        Actor::factory()->create([
            'fname' => 'Jonah',
            'lname' => 'Hill',
            'country' => 'United States',
        ]);

        Actor::factory()->create([
            'fname' => 'Emma',
            'lname' => 'Stone',
            'country' => 'United States',
        ]);
    }
}
