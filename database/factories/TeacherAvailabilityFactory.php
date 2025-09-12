<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\TeacherAvailability;

/**
 * @extends Factory<TeacherAvailability>
 */
class TeacherAvailabilityFactory extends Factory
{
    protected $model = TeacherAvailability::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->randomElement(['Disponível', 'Parcialmente Disponível', 'Não Disponível', 'Licença']);

        /** @phpstan-ignore-next-line */
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
