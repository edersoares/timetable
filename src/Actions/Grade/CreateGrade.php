<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Grade;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\Grade;

class CreateGrade extends CreateAction
{
    protected string $model = Grade::class;

    public function rules(): array
    {
        return [
            'course_id' => ['required', 'integer', 'exists:course,id'],
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
