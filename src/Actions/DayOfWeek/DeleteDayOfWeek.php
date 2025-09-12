<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\DayOfWeek;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\DayOfWeek;

class DeleteDayOfWeek extends DeleteAction
{
    protected string $model = DayOfWeek::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
