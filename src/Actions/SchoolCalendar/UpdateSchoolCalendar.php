<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolCalendar;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\SchoolCalendar;

class UpdateSchoolCalendar extends UpdateAction
{
    protected string $model = SchoolCalendar::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'academic_year_id' => ['sometimes', 'integer', 'exists:academic_year,id'],
            'school_id' => ['sometimes', 'integer', 'exists:school,id'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
