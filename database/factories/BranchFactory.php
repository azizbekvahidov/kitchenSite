<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_uz'=>$this->faker->name,
            'name_ru'=>$this->faker->name,
            'name_en'=>$this->faker->name,
            'address_uz'=>$this->faker->address,
            'address_ru'=>$this->faker->address,
            'address_en'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber,
        ];
    }
}
