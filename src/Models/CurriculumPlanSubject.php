<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\CurriculumPlanSubjectFactory;

class CurriculumPlanSubject extends Model
{
    /** @use HasFactory<CurriculumPlanSubjectFactory> */
    use HasFactory;

    protected $table = 'curriculum_plan_subject';

    protected $fillable = [
        'curriculum_plan_id',
        'subject_id',
        'quantity',
    ];

    protected static function newFactory(): CurriculumPlanSubjectFactory
    {
        return CurriculumPlanSubjectFactory::new();
    }

    /** @return BelongsTo<CurriculumPlan, CurriculumPlanSubject> */
    public function curriculumPlan(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(CurriculumPlan::class);
    }

    /** @return BelongsTo<Subject, CurriculumPlanSubject> */
    public function subject(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(Subject::class);
    }
}
