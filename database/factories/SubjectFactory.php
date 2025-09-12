<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\Subject;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->randomElement(['Matemática', 'Português', 'História', 'Geografia', 'Ciências', 'Inglês', 'Arte', 'Educação Física']);

        /** @phpstan-ignore-next-line */
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
