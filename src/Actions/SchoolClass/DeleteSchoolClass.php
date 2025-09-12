<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClass;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\SchoolClass;

class DeleteSchoolClass extends DeleteAction
{
    protected string $model = SchoolClass::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
