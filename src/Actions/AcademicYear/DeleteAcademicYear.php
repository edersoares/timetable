<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\AcademicYear;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\AcademicYear;

class DeleteAcademicYear extends DeleteAction
{
    protected string $model = AcademicYear::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
