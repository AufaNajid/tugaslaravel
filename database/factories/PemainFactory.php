<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pemain'=> fake()->name(),
            'umur'=>fake()->numberBetween(18,40),
            'role'=>fake()->word(),
            'team_id' => fake()->numberBetween(1,5),
            'tanggal' => fake()->dateTimeBetween('-17 years', '-15 years')->format('Y-m-d')
        ];
    }
}
