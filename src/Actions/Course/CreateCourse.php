<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Course;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\Course;

class CreateCourse extends CreateAction
{
    protected string $model = Course::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
