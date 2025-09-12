<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * @template T
 */
abstract class OperationAction
{
    /**
     * Eloquent model.
     */
    protected string $model;

    /**
     * Execute the operation and return.
     *
     * @return T
     */
    public function execute(array $data)
    {
        $attributes = $this->validate($data);

        return $this->operation($attributes);
    }

    /**
     * @return T
     */
    abstract protected function operation(array $data);

    public function rules(): array
    {
        return [];
    }

    public function messages(): array
    {
        return [];
    }

    public function attributes(): array
    {
        return [];
    }

    /**
     * Validate the input.
     */
    protected function validate(array $data): array
    {
        return Validator::validate(
            data: $data,
            rules: $this->rules(),
            messages: $this->messages(),
            attributes: $this->attributes(),
        );
    }

    protected function builder(): Builder
    {
        $model = $this->model();

        /** @var Model $model */
        return $model::query();
    }

    public function model(): string
    {
        return $this->model;
    }
}
