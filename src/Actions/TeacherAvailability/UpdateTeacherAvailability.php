<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\TeacherAvailability;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\TeacherAvailability;

class UpdateTeacherAvailability extends UpdateAction
{
    protected string $model = TeacherAvailability::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'day_of_week_id' => ['sometimes', 'integer', 'exists:day_of_week,id'],
            'start_time' => ['sometimes', 'date_format:H:i'],
            'end_time' => ['sometimes', 'date_format:H:i'],
        ];
    }
}
