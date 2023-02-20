<?php

namespace Database\Factories;

use App\Models\MenuCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $menuCategory = MenuCategory::query()->inRandomOrder()->first();
        return [
            'name_uz' => $this->faker->name,
            'name_ru' => $this->faker->name,
            'name_en' => $this->faker->name,
            'description_uz' => $this->faker->text,
            'description_ru' => $this->faker->text,
            'description_en' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1000, 1000000),
            'menu_category_id' => $menuCategory->id,
        ];
    }
}
