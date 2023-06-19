<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Refund>
 */
class RefundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_client' => Client::all()->random()->id,
            'amount' =>  fake()->randomFloat(2, 0, 1000),
            'date' => fake()->date(),
            'payment' =>  fake()->randomElement(['CA', 'PY', 'CR']),
        ];
    }
}
