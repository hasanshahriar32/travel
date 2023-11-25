<?php

namespace Database\Seeders;
use App\Models\destination;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class destinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        for($i=0;$i<10;$i++){
            $destination = new destination();
            $destination->Name = $faker->Name;
            $destination->Description = $faker->text;
            $destination->image = $faker->image;
            $destination->District = $faker->word;
            $destination->Duration = $faker->randomDigit;
            $destination->Price = $faker->regexify('[1-9][0-9]{4}');
            $destination->number = $faker->unique()->regexify('[A-Za-z0-9]{4}');
            $destination->created_at = $faker->dateTime();
            $destination->updated_at = $faker->dateTime();
            $destination->save();
        }


    }
}
