<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'property_type' => $this->faker->randomElement(['Apartment', 'Villa', 'Home', 'Office', 'Building', 'Townhouse', 'Shop', 'Garage']),
            'sell_type' => $this->faker->randomElement(['Sell', 'Rent']),
            'title' => $this->faker->sentence(3),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'town' => $this->faker->city(),
            'rooms' => $this->faker->randomDigit(),
            'baths' => $this->faker->randomDigit(),
            'square' => $this->faker->randomNumber(4, false),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(4, false)
        ];
    }
}
