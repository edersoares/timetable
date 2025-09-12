<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolCalendar;

/**
 * @extends Factory<SchoolCalendar>
 */
class SchoolCalendarFactory extends Factory
{
    protected $model = SchoolCalendar::class;

    public function definition(): array
    {
        $year = $this->faker->numberBetween(2020, 2030);

        /** @phpstan-ignore-next-line */
        return [
            'school_id' => School::factory(),
            'name' => "Calendário Escolar {$year}",
            'year' => $year,
        ];
    }
}
