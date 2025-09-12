<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\SubjectFactory;

class Subject extends Model
{
    /** @use HasFactory<SubjectFactory> */
    use HasFactory;

    protected $table = 'subject';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory(): SubjectFactory
    {
        return SubjectFactory::new();
    }
}
