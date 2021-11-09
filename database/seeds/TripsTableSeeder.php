<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrip = new Trip();
            $newTrip->place_destination = $faker->country() ;
            $newTrip->check_in = $faker->date();
            $newTrip->check_out = $faker->date();
            $newTrip->guests = $faker->randomDigit();;
            $newTrip->name_host = $faker->name();
            $newTrip->name_structure = $faker->word();
            $newTrip->price = $faker->randomFloat(2, 100, 50000);
            $newTrip->save();
        }
    }
}
