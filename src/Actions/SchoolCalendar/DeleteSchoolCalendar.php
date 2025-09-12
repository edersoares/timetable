<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolCalendar;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\SchoolCalendar;

class DeleteSchoolCalendar extends DeleteAction
{
    protected string $model = SchoolCalendar::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
