<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClassSchedule;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\SchoolClassSchedule;

/**
 * Edita um template de quadro de horários existente.
 */
class UpdateSchoolClassSchedule extends UpdateAction
{
    protected string $model = SchoolClassSchedule::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
