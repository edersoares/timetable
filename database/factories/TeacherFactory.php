<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\Teacher;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        $name = $this->faker->name();

        /** @phpstan-ignore-next-line */
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
