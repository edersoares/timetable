<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Grade;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\Grade;

class UpdateGrade extends UpdateAction
{
    protected string $model = Grade::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'course_id' => ['sometimes', 'integer', 'exists:course,id'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
