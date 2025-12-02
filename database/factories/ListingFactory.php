<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    // run this command to create this file php artisan make:factory ListingFactory
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // modify this with desired data you want to fake 
        return [
            "title" => $this->faker->sentence(),
            "tags" => $this->faker->words(3, true),
            "company" => $this->faker->company(),
            "email" => $this->faker->companyEmail(),
            "website" => $this->faker->url(),
            "location" => $this->faker->city(),
            "description" => $this->faker->paragraph(),
        ];
    }
}
