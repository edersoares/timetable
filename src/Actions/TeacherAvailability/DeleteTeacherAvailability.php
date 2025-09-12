<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\TeacherAvailability;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\TeacherAvailability;

class DeleteTeacherAvailability extends DeleteAction
{
    protected string $model = TeacherAvailability::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
