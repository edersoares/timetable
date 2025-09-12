<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Subject;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\Subject;

class UpdateSubject extends UpdateAction
{
    protected string $model = Subject::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
