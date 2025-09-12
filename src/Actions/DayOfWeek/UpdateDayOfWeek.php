<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\DayOfWeek;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\DayOfWeek;

class UpdateDayOfWeek extends UpdateAction
{
    protected string $model = DayOfWeek::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
