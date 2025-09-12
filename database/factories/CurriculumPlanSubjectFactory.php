<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\CurriculumPlan;
use Portabilis\Timetable\Models\CurriculumPlanSubject;
use Portabilis\Timetable\Models\Subject;

/**
 * @extends Factory<CurriculumPlanSubject>
 */
class CurriculumPlanSubjectFactory extends Factory
{
    protected $model = CurriculumPlanSubject::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        return [
            'curriculum_plan_id' => CurriculumPlan::factory(),
            'subject_id' => Subject::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
