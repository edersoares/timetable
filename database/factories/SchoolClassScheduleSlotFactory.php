<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\DayOfWeek;
use Portabilis\Timetable\Models\SchoolClassSchedule;
use Portabilis\Timetable\Models\SchoolClassScheduleSlot;
use Portabilis\Timetable\Models\Shift;

/**
 * @extends Factory<SchoolClassScheduleSlot>
 */
class SchoolClassScheduleSlotFactory extends Factory
{
    protected $model = SchoolClassScheduleSlot::class;

    public function definition(): array
    {
        $startHour = $this->faker->numberBetween(7, 16);
        $endHour = $this->faker->numberBetween($startHour + 1, 17);

        /** @phpstan-ignore-next-line */
        return [
            'school_class_schedule_id' => SchoolClassSchedule::factory(),
            'shift_id' => Shift::factory(),
            'day_of_week_id' => DayOfWeek::factory(),
            'start_time' => sprintf('%02d:00:00', $startHour),
            'end_time' => sprintf('%02d:00:00', $endHour),
        ];
    }
}
