<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Musteri>
 */
class MusteriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "ad" => $this->faker->firstName,
            "soyad" => $this->faker->lastName,
            "maas" => $this->faker->randomNumber(5)
        ];
    }
}
