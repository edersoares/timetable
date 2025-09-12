<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\SchoolClassScheduleSlotFactory;

class SchoolClassScheduleSlot extends Model
{
    /** @use HasFactory<SchoolClassScheduleSlotFactory> */
    use HasFactory;

    protected $table = 'school_class_schedule_slot';

    protected $fillable = [
        'school_class_schedule_id',
        'shift_id',
        'day_of_week_id',
        'start_time',
        'end_time',
    ];

    protected static function newFactory(): SchoolClassScheduleSlotFactory
    {
        return SchoolClassScheduleSlotFactory::new();
    }

    /** @return BelongsTo<SchoolClassSchedule, SchoolClassScheduleSlot> */
    public function schoolClassSchedule(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(SchoolClassSchedule::class);
    }

    /** @return BelongsTo<Shift, SchoolClassScheduleSlot> */
    public function shift(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(Shift::class);
    }

    /** @return BelongsTo<DayOfWeek, SchoolClassScheduleSlot> */
    public function dayOfWeek(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(DayOfWeek::class);
    }
}
