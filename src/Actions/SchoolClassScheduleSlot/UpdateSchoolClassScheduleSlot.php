<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClassScheduleSlot;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\SchoolClassScheduleSlot;

class UpdateSchoolClassScheduleSlot extends UpdateAction
{
    protected string $model = SchoolClassScheduleSlot::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'school_class_schedule_id' => ['sometimes', 'integer', 'exists:school_class_schedule,id'],
            'shift_id' => ['sometimes', 'integer', 'exists:shift,id'],
            'day_of_week_id' => ['sometimes', 'integer', 'exists:day_of_week,id'],
            'start_time' => ['sometimes', 'date_format:H:i'],
            'end_time' => ['sometimes', 'date_format:H:i'],
        ];
    }
}
