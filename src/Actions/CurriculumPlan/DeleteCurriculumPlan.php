<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions\CurriculumPlan;

use Portabilis\Timetable\Actions\DeleteAction;
use Portabilis\Timetable\Models\CurriculumPlan;

class DeleteCurriculumPlan extends DeleteAction
{
    protected string $model = CurriculumPlan::class;

    public function rules(): array
    {
        return [
            'id' => ['required'],
        ];
    }
}
