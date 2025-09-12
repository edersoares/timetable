<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\CurriculumPlan;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\CurriculumPlan;

class UpdateCurriculumPlan extends UpdateAction
{
    protected string $model = CurriculumPlan::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'grade_id' => ['sometimes', 'integer', 'exists:grade,id'],
            'name' => ['sometimes', 'string', 'min:3', 'max:50'],
            'slug' => ['sometimes', 'string', 'min:3', 'max:50'],
        ];
    }
}
