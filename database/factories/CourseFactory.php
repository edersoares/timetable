<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\Course;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->words(2, true);

        /** @phpstan-ignore-next-line */
        return [
            'name' => $name,
            'slug' => Str::slug($name), /** @phpstan-ignore-line */
        ];
    }
}
