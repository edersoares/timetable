<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Portabilis\Timetable\Database\Factories\ShiftFactory;

class Shift extends Model
{
    /** @use HasFactory<ShiftFactory> */
    use HasFactory;

    protected $table = 'shift';

    protected $fillable = [
        'name',
    ];

    protected static function newFactory(): ShiftFactory
    {
        return ShiftFactory::new();
    }
}
