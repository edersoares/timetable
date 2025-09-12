<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Grade;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\Grade;

class DeleteGrade extends DeleteAction
{
    protected string $model = Grade::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
