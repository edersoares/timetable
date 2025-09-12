<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\Grade;
use Portabilis\Timetable\Models\School;
use Portabilis\Timetable\Models\SchoolClass;

/**
 * @extends Factory<SchoolClass>
 */
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->randomElement(['A', 'B', 'C', 'D']);

        /** @phpstan-ignore-next-line */
        return [
            'grade_id' => Grade::factory(),
            'school_id' => School::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
