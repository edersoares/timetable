<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\CurriculumPlanSubject;

use Portabilis\Timetable\Actions\CreateAction;
use Portabilis\Timetable\Models\CurriculumPlanSubject;

class CreateCurriculumPlanSubject extends CreateAction
{
    protected string $model = CurriculumPlanSubject::class;

    public function rules(): array
    {
        return [
            'curriculum_plan_id' => ['required', 'integer', 'exists:curriculum_plan,id'],
            'subject_id' => ['required', 'integer', 'exists:subject,id'],
            'quantity' => ['required', 'integer', 'min:1'],
        ];
    }
}
