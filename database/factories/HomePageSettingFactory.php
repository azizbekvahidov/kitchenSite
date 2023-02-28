<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomePageSetting>
 */
class HomePageSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_uz' => $this->faker->title,
            'title_ru' => $this->faker->title,
            'title_en' => $this->faker->title,
            'description_uz' => $this->faker->text,
            'description_ru' => $this->faker->text,
            'description_en' => $this->faker->text,
            'work_time_from' => $this->faker->time,
            'work_time_to' => $this->faker->time,
        ];
    }
}
