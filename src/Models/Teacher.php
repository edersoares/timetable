<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\TeacherFactory;

class Teacher extends Model
{
    /** @use HasFactory<TeacherFactory> */
    use HasFactory;

    protected $table = 'teacher';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory(): TeacherFactory
    {
        return TeacherFactory::new();
    }
}
