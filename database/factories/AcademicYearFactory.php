<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Portabilis\Timetable\Models\AcademicYear;

/**
 * @extends Factory<AcademicYear>
 */
class AcademicYearFactory extends Factory
{
    protected $model = AcademicYear::class;

    public function definition(): array
    {
        $year = $this->faker->numberBetween(2020, 2030);

        /** @phpstan-ignore-next-line */
        return [
            'name' => "Ano Letivo {$year}",
            'year' => $year,
        ];
    }
}
