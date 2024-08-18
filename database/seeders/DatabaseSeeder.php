<?php

namespace Database\Seeders;
use App\Models\Actor;
use App\Models\User;
use App\Models\Film;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Film::factory()->create([
            'title' => 'La La Land',
            'year' => 2016,
            'genre' => 'Musical'
        ]);

        Film::factory()->create([
            'title' => 'Barbie',
            'year' => 2023,
            'genre' => 'Comedy'
        ]);

        Film::factory()->create([
            'title' => 'Wolf of Wall Street',
            'year' => 2013,
            'genre' => 'Comedy'
        ]);

        Film::factory()->create([
            'title' => 'Once Upon a Time... in Hollywood',
            'year' => 2019,
            'genre' => 'Comedy'
        ]);

        Film::factory()->create([
            'title' => 'Crazy Stupid Love',
            'year' => 2011,
            'genre' => 'RomCom'
        ]);

        $this->call(ActorFilmTableSeeder::class);
    }
}
