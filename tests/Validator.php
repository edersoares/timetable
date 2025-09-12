<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Tests;

use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Pest\PendingCalls\TestCall;
use Pest\Support\HigherOrderTapProxy;

trait Validator
{
    public function toValidateRequired(string $attribute, ?string $message = null): HigherOrderTapProxy|TestCall
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('field is required');

        $modelAttributes = $this->factory->make()->toArray();

        unset($modelAttributes[$attribute]);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateMin(string $attribute, int $min): HigherOrderTapProxy|TestCall
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('field must be at least');

        $modelAttributes = $this->factory->make()->toArray();

        $modelAttributes[$attribute] = Str::random($min - 1);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateMax(string $attribute, int $max): HigherOrderTapProxy|TestCall
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('field must not be greater than');

        $modelAttributes = $this->factory->make()->toArray();

        $modelAttributes[$attribute] = Str::random($max + 1);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateSize(string $attribute, int $size): HigherOrderTapProxy|TestCall
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('field must not be greater than');

        $modelAttributes = $this->factory->make()->toArray();

        $modelAttributes[$attribute] = substr((string) $modelAttributes[$attribute], 0, $size - 1);

        execute($this->action, $modelAttributes);

        return test();
    }
}
