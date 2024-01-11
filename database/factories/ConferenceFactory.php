<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'eventName' => fake()->text(15),
            'eventDate' => fake()->dateTime('now', null),
            'location' => fake()->text(15),
            'info' => fake()->paragraph(3)
        ];
    }
}
