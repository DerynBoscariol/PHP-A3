<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $RyanGosling = Actor::find(1); 
        $MargotRobbie = Actor::find(2);
        $LeoDic = Actor::find(3);
        $JonahHill = Actor::find(4);
        $EmmaStone = Actor::find(5);

        // Find or create films
        $LaLaLand = Film::find(1); 
        $Barbie = Film::find(2);
        $WolfWallStreet = Film::find(3);
        $OnceHollywood = Film::find(4);
        $CrazyLove = Film::find(5); 

        // Attach films to each actor
        $RyanGosling->films()->attach([$LaLaLand->id, $Barbie->id, $CrazyLove->id]);

        $MargotRobbie->films()->attach([$Barbie->id, $WolfWallStreet->id, $OnceHollywood->id]);

        $LeoDic->films()->attach([$WolfWallStreet->id, $OnceHollywood->id]);

        $JonahHill->films()->attach([$WolfWallStreet->id]);

        $EmmaStone->films()->attach([$LaLaLand->id, $CrazyLove->id]);

    }
}
