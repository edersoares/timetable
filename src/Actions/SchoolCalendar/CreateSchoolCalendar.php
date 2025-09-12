<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolCalendar;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\SchoolCalendar;

class CreateSchoolCalendar extends CreateAction
{
    protected string $model = SchoolCalendar::class;

    public function rules(): array
    {
        return [
            'academic_year_id' => ['required', 'integer', 'exists:academic_year,id'],
            'school_id' => ['required', 'integer', 'exists:school,id'],
            'name' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
