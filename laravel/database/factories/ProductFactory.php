<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->sentence,
            'short_notes' => $this->faker->paragraph,
            'price' => $this->faker->randomDigit(),
            'image' => $this->faker->image,
            'slug' => $this->faker->slug,
        ];
    }
}
