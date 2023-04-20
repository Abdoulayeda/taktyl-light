<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'entreprise' => fake()->company(),
            'telephone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'adresse' => fake()->streetAddress(),
            'user_id' => rand(2,5),
            'abonnement_id' => rand(1,12),
            'formule_id' => rand(1,3),
        ];
    }
}
