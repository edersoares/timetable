<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\DayOfWeekFactory;

class DayOfWeek extends Model
{
    /** @use HasFactory<DayOfWeekFactory> */
    use HasFactory;

    protected $table = 'day_of_week';

    protected $fillable = [
        'slug',
    ];

    protected static function newFactory(): DayOfWeekFactory
    {
        return DayOfWeekFactory::new();
    }
}
