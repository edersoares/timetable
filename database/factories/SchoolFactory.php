<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Portabilis\Timetable\Models\School;

/**
 * @extends Factory<School>
 */
class SchoolFactory extends Factory
{
    protected $model = School::class;

    public function definition(): array
    {
        /** @phpstan-ignore-next-line */
        $name = (string) $this->faker->words(3, true);

        /** @phpstan-ignore-next-line */
        return [
            'name' => $name,
            'slug' => Str::slug($name), /** @phpstan-ignore-line */
        ];
    }
}
