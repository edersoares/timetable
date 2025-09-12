<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Teacher;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\Teacher;

class CreateTeacher extends CreateAction
{
    protected string $model = Teacher::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
