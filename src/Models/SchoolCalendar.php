<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\SchoolCalendarFactory;

class SchoolCalendar extends Model
{
    /** @use HasFactory<SchoolCalendarFactory> */
    use HasFactory;

    protected $table = 'school_calendar';

    protected $fillable = [
        'academic_year_id',
        'school_id',
        'name',
    ];

    protected static function newFactory(): SchoolCalendarFactory
    {
        return SchoolCalendarFactory::new();
    }

    /** @return BelongsTo<AcademicYear, SchoolCalendar> */
    public function academicYear(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(AcademicYear::class);
    }

    /** @return BelongsTo<School, SchoolCalendar> */
    public function school(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(School::class);
    }
}
