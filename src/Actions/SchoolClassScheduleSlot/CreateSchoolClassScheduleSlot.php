<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClassScheduleSlot;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\SchoolClassScheduleSlot;

class CreateSchoolClassScheduleSlot extends CreateAction
{
    protected string $model = SchoolClassScheduleSlot::class;

    public function rules(): array
    {
        return [
            'school_class_schedule_id' => ['required', 'integer', 'exists:school_class_schedule,id'],
            'shift_id' => ['required', 'integer', 'exists:shift,id'],
            'day_of_week_id' => ['required', 'integer', 'exists:day_of_week,id'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i'],
        ];
    }
}
