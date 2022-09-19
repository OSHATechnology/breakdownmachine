<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailMesin>
 */
class DetailMesinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_nama' => fake()->randomDigitNot(0),
            'id_jenis' => fake()->randomDigitNot(0),
            'type' => fake()->randomElement(['karburator','turbo','non-turbo','hybrid']),
            'latest_maintenance' => fake()->dateTimeThisMonth(),
            'next_maintenance' => fake()->dateTimeThisMonth('+1000 days'),
            'condition' => fake()->randomElement(['very good','good','bad']),
            'breakdown_possibility' => fake()->numberBetween(85,100),
            'kode_mesin' => fake()->iban('KodeMesin')
        ];
    }
}