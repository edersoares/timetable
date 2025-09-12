<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\CurriculumPlan;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\CurriculumPlan;

class CreateCurriculumPlan extends CreateAction
{
    protected string $model = CurriculumPlan::class;

    public function rules(): array
    {
        return [
            'grade_id' => ['required', 'integer', 'exists:grade,id'],
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'slug' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
