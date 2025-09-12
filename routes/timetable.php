<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Portabilis\Timetable\Http\Controllers\TimetableController;

Route::get('timetable', TimetableController::class);
