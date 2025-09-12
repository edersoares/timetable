<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\TeacherAvailabilityFactory;

class TeacherAvailability extends Model
{
    /** @use HasFactory<TeacherAvailabilityFactory> */
    use HasFactory;

    protected $table = 'teacher_availability';

    protected $fillable = [
        'day_of_week_id',
        'start_time',
        'end_time',
    ];

    protected static function newFactory(): TeacherAvailabilityFactory
    {
        return TeacherAvailabilityFactory::new();
    }

    /** @return BelongsTo<DayOfWeek, TeacherAvailability> */
    public function dayOfWeek(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(DayOfWeek::class);
    }
}
