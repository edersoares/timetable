<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\SchoolClass;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\SchoolClass;

class UpdateSchoolClass extends UpdateAction
{
    protected string $model = SchoolClass::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'grade_id' => ['sometimes', 'integer', 'exists:grade,id'],
            'school_id' => ['sometimes', 'integer', 'exists:school,id'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
