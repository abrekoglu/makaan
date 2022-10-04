<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyAgent>
 */
class PropertyAgentFactory extends Factory
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
            'surname' => $this->faker->lastName(),
            'job_title' => $this->faker->title(),
            'facebook_account' => 'facebook.com/',
            'twitter_account' => 'twitter.com/',
            'instagram_account' => 'instagram.com/' 
        ];
    }
}
