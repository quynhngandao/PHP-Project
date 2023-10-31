<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'age' => $this->faker->numberBetween(1, 10),
            'tags' => 'dog,cat,rabbit,bird,rehome,playdate',
            'owner' => $this->faker->name(),
            'location' => $this->faker->city . ', ' . $this->faker->state(),
            'email' => $this->faker->email(),
            'description' => $this->faker->sentence(),
        ];
    }
}
