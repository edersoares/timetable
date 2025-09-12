<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClassSchedule;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\SchoolClassSchedule;

/**
 * Exclui um template de quadro de horários existente.
 */
class DeleteSchoolClassSchedule extends DeleteAction
{
    protected string $model = SchoolClassSchedule::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
