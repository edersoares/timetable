<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\School;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\School;

class CreateSchool extends CreateAction
{
    protected string $model = School::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}