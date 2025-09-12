<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\CurriculumPlanFactory;

class CurriculumPlan extends Model
{
    /** @use HasFactory<CurriculumPlanFactory> */
    use HasFactory;

    protected $table = 'curriculum_plan';

    protected $fillable = [
        'grade_id',
        'name',
        'slug',
    ];

    protected static function newFactory(): CurriculumPlanFactory
    {
        return CurriculumPlanFactory::new();
    }

    /** @return BelongsTo<Grade, CurriculumPlan> */
    public function grade(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(Grade::class);
    }
}
