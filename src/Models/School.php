<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\SchoolFactory;

class School extends Model
{
    /** @use HasFactory<SchoolFactory> */
    use HasFactory;

    protected $table = 'school';

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function newFactory(): SchoolFactory
    {
        return SchoolFactory::new();
    }
}
