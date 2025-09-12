<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\School;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\School;

class UpdateSchool extends UpdateAction
{
    protected string $model = School::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}