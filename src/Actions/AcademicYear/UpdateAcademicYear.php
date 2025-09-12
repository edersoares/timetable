<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\AcademicYear;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\AcademicYear;

class UpdateAcademicYear extends UpdateAction
{
    protected string $model = AcademicYear::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'year' => ['sometimes', 'integer', 'min:1900', 'max:2100'],
        ];
    }
}
