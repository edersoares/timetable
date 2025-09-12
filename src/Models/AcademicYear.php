<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\AcademicYearFactory;

class AcademicYear extends Model
{
    /** @use HasFactory<AcademicYearFactory> */
    use HasFactory;

    protected $table = 'academic_year';

    protected $fillable = [
        'name',
        'year',
    ];

    protected static function newFactory(): AcademicYearFactory
    {
        return AcademicYearFactory::new();
    }
}
