<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\TeacherAvailability;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\TeacherAvailability;

class CreateTeacherAvailability extends CreateAction
{
    protected string $model = TeacherAvailability::class;

    public function rules(): array
    {
        return [
            'day_of_week_id' => ['required', 'integer', 'exists:day_of_week,id'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i'],
        ];
    }
}
