<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\DayOfWeek;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\DayOfWeek;

class CreateDayOfWeek extends CreateAction
{
    protected string $model = DayOfWeek::class;

    public function rules(): array
    {
        return [
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
