<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuCategory>
 */
class MenuCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $branch = Branch::query()->inRandomOrder()->first();
        return [
            'name_uz'=>$this->faker->name,
            'name_ru'=>$this->faker->name,
            'name_en'=>$this->faker->name,
            'branch_id'=>$branch->id,
        ];
    }
}
