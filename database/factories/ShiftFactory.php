<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\Shift;

/**
 * @extends Factory<Shift>
 */
class ShiftFactory extends Factory
{
    protected $model = Shift::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        return [
            'name' => $this->faker->unique()->randomElement(['Matutino', 'Vespertino', 'Noturno', 'Integral']),
        ];
    }
}
