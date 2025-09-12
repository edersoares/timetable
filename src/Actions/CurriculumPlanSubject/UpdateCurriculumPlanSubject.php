<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\CurriculumPlanSubject;

use Portabilis\Timetable\Actions\UpdateAction;
use Portabilis\Timetable\Models\CurriculumPlanSubject;

class UpdateCurriculumPlanSubject extends UpdateAction
{
    protected string $model = CurriculumPlanSubject::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
            'curriculum_plan_id' => ['sometimes', 'integer', 'exists:curriculum_plan,id'],
            'subject_id' => ['sometimes', 'integer', 'exists:subject,id'],
            'quantity' => ['sometimes', 'integer', 'min:1'],
        ];
    }
}
