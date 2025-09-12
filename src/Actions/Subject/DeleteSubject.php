<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Subject;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\Subject;

class DeleteSubject extends DeleteAction
{
    protected string $model = Subject::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
