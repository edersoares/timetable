<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\CourseFactory;

class Course extends Model
{
    /** @use HasFactory<CourseFactory> */
    use HasFactory;

    protected $table = 'course';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory(): CourseFactory
    {
        return CourseFactory::new();
    }
}
