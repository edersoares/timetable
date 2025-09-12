<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\AcademicYear;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\AcademicYear;

class CreateAcademicYear extends CreateAction
{
    protected string $model = AcademicYear::class;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'year' => ['required', 'integer', 'min:1900', 'max:2100'],
        ];
    }
}
