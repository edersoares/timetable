<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\TimetableFactory;

class Timetable extends Model
{
    /** @use HasFactory<TimetableFactory> */
    use HasFactory;

    protected $table = 'timetable';
}
