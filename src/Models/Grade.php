<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\GradeFactory;

class Grade extends Model
{
    /** @use HasFactory<GradeFactory> */
    use HasFactory;

    protected $table = 'grade';

    protected $fillable = [
        'course_id',
        'name',
        'slug',
    ];

    protected static function newFactory(): GradeFactory
    {
        return GradeFactory::new();
    }

    /** @return BelongsTo<Course, Grade> */
    public function course(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(Course::class);
    }
}
