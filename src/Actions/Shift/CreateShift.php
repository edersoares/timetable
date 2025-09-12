<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\Shift;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\Shift;

class CreateShift extends CreateAction
{
    protected string $model = Shift::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
