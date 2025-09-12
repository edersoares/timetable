<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Shift;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\Shift;

class DeleteShift extends DeleteAction
{
    protected string $model = Shift::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
