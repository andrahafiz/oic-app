<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tanah>
 */
class TanahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'project' => 'PROJECT ' . $this->faker->name(),
            'price' => $this->faker->randomNumber(),
            'location' => $this->faker->word(),
            'date_buy' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'condition' => $this->faker->randomElement(['Baik', 'Rusak'])
        ];
    }
}
