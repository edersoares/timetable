<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\SchoolClassScheduleFactory;

class SchoolClassSchedule extends Model
{
    /** @use HasFactory<SchoolClassScheduleFactory> */
    use HasFactory;

    protected $table = 'school_class_schedule';

    protected $fillable = [
        'name',
    ];

    protected static function newFactory(): SchoolClassScheduleFactory
    {
        return SchoolClassScheduleFactory::new();
    }
}
