<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\Course;
use Portabilis\Timetable\Models\Grade;

/**
 * @extends Factory<Grade>
 */
class GradeFactory extends Factory
{
    protected $model = Grade::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->randomElement(['1º Ano', '2º Ano', '3º Ano', '4º Ano', '5º Ano', '6º Ano', '7º Ano', '8º Ano', '9º Ano']);

        /** @phpstan-ignore-next-line */
        return [
            'course_id' => Course::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
