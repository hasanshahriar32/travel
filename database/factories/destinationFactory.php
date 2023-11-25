<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\destination>
 */
class destinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->word,
            'Description' => $this->faker->text,
            'image' => $this->faker->word,
            'District'=>$this->faker->word,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'Duration' => $this->faker->word,
            'price' => $this->faker->unique()->regexify('[1-9][0-9]{0,2}'), // Generates prices like XXX.YY (e.g., 123.45)

            'number' => $this->faker->unique()->regexify('[A-Za-z0-9]{4}'),
        ];
    }
}
