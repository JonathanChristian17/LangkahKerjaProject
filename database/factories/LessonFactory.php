<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    protected $model = Lesson::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $videos = [
            'https://www.youtube.com/watch?v=UnTQVlqmDQ0',
            'https://www.youtube.com/watch?v=z6hQqgvGI4Y',
            'https://www.youtube.com/watch?v=U8XF6AFGqlc',
            'https://www.youtube.com/watch?v=vEROU2XtPR8',
            'https://www.youtube.com/watch?v=pWbMrx5rVBE',
            'https://www.youtube.com/watch?v=Zftx68K-1D4',
            'https://www.youtube.com/watch?v=sard25VQ2HU'
        ];
        return [
            'title' => $this->faker->sentence(3),
            'course_id' => rand(1, 30),
            'duration' => rand(1.00, 10.00),
            'video' => $videos[mt_rand(0, count($videos) - 1)]
        ];
    }
}
