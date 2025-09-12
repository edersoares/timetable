<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Course;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\Course;

class DeleteCourse extends DeleteAction
{
    protected string $model = Course::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
