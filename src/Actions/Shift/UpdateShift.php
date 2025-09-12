<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Shift;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\Shift;

class UpdateShift extends UpdateAction
{
    protected string $model = Shift::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
