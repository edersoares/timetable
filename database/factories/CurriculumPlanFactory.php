<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\CurriculumPlan;
use Portabilis\Timetable\Models\Grade;

/**
 * @extends Factory<CurriculumPlan>
 */
class CurriculumPlanFactory extends Factory
{
    protected $model = CurriculumPlan::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->randomElement(['Matriz Curricular Base', 'Matriz Curricular Especial', 'Matriz Curricular Integral']);

        /** @phpstan-ignore-next-line */
        return [
            'grade_id' => Grade::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
