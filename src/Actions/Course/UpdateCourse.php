<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Course;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\Course;

class UpdateCourse extends UpdateAction
{
    protected string $model = Course::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
