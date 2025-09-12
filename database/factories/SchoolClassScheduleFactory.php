<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\SchoolClassSchedule;

/**
 * @extends Factory<SchoolClassSchedule>
 */
class SchoolClassScheduleFactory extends Factory
{
    protected $model = SchoolClassSchedule::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        return [
            'name' => 'Quadro de Horários ' . $this->faker->word(),
        ];
    }
}
