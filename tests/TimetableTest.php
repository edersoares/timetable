<?php

declare(strict_types=1);

use Portabilis\Timetable\Models\Timetable;

test('command exists', function () {
    $this->artisan('timetable')
        ->expectsOutput('Timetable')
        ->assertSuccessful();
});

test('route exists', function () {
    $this->get('timetable')
        ->assertSee('Timetable')
        ->assertOk();
});

test('database table is empty', function () {
    $this->assertDatabaseEmpty(Timetable::class);
});
