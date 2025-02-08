<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' => $this->faker->sentence(4),
        'short_description' => $this->faker->realText(100),
        'description' => $this->faker->realText(),
        'outcomes' => $this->faker->text(5),
        'section' => $this->faker->text(10),
        'requirements' => "Python, Linux, Basic Programming",
        'language' => 'English',
        'price' => rand(100, 150),
        'level' => 'Beginner',
        'thumbnail' => null,
        'video_url' => null,
        'visibility' => true,
        'category_id' => rand(1, 10)
        ];
    }
}
