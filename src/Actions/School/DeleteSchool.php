<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\School;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\School;

class DeleteSchool extends DeleteAction
{
    protected string $model = School::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}