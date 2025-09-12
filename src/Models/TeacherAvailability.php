<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\TeacherAvailabilityFactory;

class TeacherAvailability extends Model
{
    /** @use HasFactory<TeacherAvailabilityFactory> */
    use HasFactory;

    protected $table = 'teacher_availability';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory(): TeacherAvailabilityFactory
    {
        return TeacherAvailabilityFactory::new();
    }
}
