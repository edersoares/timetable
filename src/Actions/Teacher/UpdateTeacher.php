<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Teacher;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\Teacher;

class UpdateTeacher extends UpdateAction
{
    protected string $model = Teacher::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
