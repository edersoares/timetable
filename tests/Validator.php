<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Tests;

use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Pest\PendingCalls\TestCall;
use Pest\Support\HigherOrderTapProxy;

trait Validator
{
    use Eloquent;

    public function toValidateRequired(string $attribute): HigherOrderTapProxy|TestCall
    {
        $displayName = str_replace('_', ' ', $attribute);
        $message = trans('validation.required', ['attribute' => $displayName]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message);

        $modelAttributes = $this->getAttributesFromFactory();

        unset($modelAttributes[$attribute]);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateMin(string $attribute, int $min): HigherOrderTapProxy|TestCall
    {
        $message = trans('validation.min', ['attribute' => $attribute, 'min' => $min]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message['string']);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = Str::random($min - 1);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateMax(string $attribute, int $max): HigherOrderTapProxy|TestCall
    {
        $message = trans('validation.max', ['attribute' => $attribute, 'max' => $max]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message['string']);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = Str::random($max + 1);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateSize(string $attribute, int $size): HigherOrderTapProxy|TestCall
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('field must not be greater than');

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = substr((string) $modelAttributes[$attribute], 0, $size - 1);

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateInteger(string $attribute): HigherOrderTapProxy|TestCall
    {
        $displayName = str_replace('_', ' ', $attribute);
        $message = trans('validation.integer', ['attribute' => $displayName]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = 'not-an-integer';

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateExists(string $attribute, string $table): HigherOrderTapProxy|TestCall
    {
        $displayName = str_replace('_', ' ', $attribute);
        $message = trans('validation.exists', ['attribute' => $displayName]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = 99999;

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateDateFormat(string $attribute, string $format): HigherOrderTapProxy|TestCall
    {
        $displayName = str_replace('_', ' ', $attribute);
        $message = trans('validation.date_format', ['attribute' => $displayName, 'format' => $format]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = 'invalid-date-format';

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateMinNumeric(string $attribute, int $min): HigherOrderTapProxy|TestCall
    {
        $displayName = str_replace('_', ' ', $attribute);
        $message = trans('validation.min.numeric', ['attribute' => $displayName, 'min' => $min]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = $min - 1;

        execute($this->action, $modelAttributes);

        return test();
    }

    public function toValidateMaxNumeric(string $attribute, int $max): HigherOrderTapProxy|TestCall
    {
        $displayName = str_replace('_', ' ', $attribute);
        $message = trans('validation.max.numeric', ['attribute' => $displayName, 'max' => $max]);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage($message);

        $modelAttributes = $this->getAttributesFromFactory();

        $modelAttributes[$attribute] = $max + 1;

        execute($this->action, $modelAttributes);

        return test();
    }
}
