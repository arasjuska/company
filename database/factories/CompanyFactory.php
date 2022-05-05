<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'logo' => $this->faker->imageUrl(100, 100),
            'user_id' => User::all()->random()->id
        ];
    }
}
