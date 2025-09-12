<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\AcademicYear;
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
        /** @phpstan-ignore-next-line */
        return [
            'academic_year_id' => AcademicYear::factory(),
            'school_id' => School::factory(),
            'name' => 'Calendário Escolar',
        ];
    }
}
