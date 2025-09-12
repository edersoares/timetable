<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Portabilis\Timetable\Database\Factories\SchoolClassFactory;

class SchoolClass extends Model
{
    /** @use HasFactory<SchoolClassFactory> */
    use HasFactory;

    protected $table = 'school_class';

    protected $fillable = [
        'grade_id',
        'school_id',
        'name',
        'slug',
    ];

    protected static function newFactory(): SchoolClassFactory
    {
        return SchoolClassFactory::new();
    }

    /** @return BelongsTo<Grade, SchoolClass> */
    public function grade(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(Grade::class);
    }

    /** @return BelongsTo<School, SchoolClass> */
    public function school(): BelongsTo
    {
        /** @phpstan-ignore-next-line */
        return $this->belongsTo(School::class);
    }
}
