<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClassScheduleSlot;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\SchoolClassScheduleSlot;

class DeleteSchoolClassScheduleSlot extends DeleteAction
{
    protected string $model = SchoolClassScheduleSlot::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
