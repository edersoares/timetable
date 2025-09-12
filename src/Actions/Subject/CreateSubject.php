<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Subject;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\Subject;

class CreateSubject extends CreateAction
{
    protected string $model = Subject::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
