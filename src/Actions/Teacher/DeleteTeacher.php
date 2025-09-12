<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Teacher;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\Teacher;

class DeleteTeacher extends DeleteAction
{
    protected string $model = Teacher::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
