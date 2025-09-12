<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClassSchedule;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\SchoolClassSchedule;

/**
 * Cadastra um novo template de quadro de horários.
 */
class CreateSchoolClassSchedule extends CreateAction
{
    protected string $model = SchoolClassSchedule::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
