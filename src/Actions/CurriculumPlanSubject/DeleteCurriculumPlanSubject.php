<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\CurriculumPlanSubject;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\CurriculumPlanSubject;

class DeleteCurriculumPlanSubject extends DeleteAction
{
    protected string $model = CurriculumPlanSubject::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
