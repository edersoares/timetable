<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Tests;

use Illuminate\Database\Eloquent\SoftDeletes;

trait Action
{
    use Eloquent;

    private string $action;

    public function action(string $action): static
    {
        $this->action = $action;

        $instance = app($action);

        $this->eloquent($instance->model());

        return $this;
    }

    public function toBeCreateAction()
    {
        $modelAttributes = $this->factory->make()->toArray();
        $modelAttributes = $this->removeTimestamps($modelAttributes);

        $model = execute($this->action, $modelAttributes);

        $this->assertDatabaseHas($this->class, $modelAttributes);
        $this->assertDatabaseCount($this->class, 1);

        return $model;
    }

    public function toBeUpdateAction()
    {
        $modelCreated = $this->factory->create();
        $modelCreatedAttributes = $this->removeTimestamps($modelCreated->toArray());
        $modelUpdateAttributes = $this->factory->make()->toArray();
        $modelUpdateAttributes = $this->removeTimestamps($modelUpdateAttributes);

        $model = execute($this->action, $modelUpdateAttributes);

        $this->assertDatabaseMissing($modelCreated->getTable(), $modelCreatedAttributes);
        $this->assertDatabaseHas($modelCreated->getTable(), $modelUpdateAttributes);
        $this->assertDatabaseCount($modelCreated->getTable(), 1);

        return $model;
    }

    public function toBeDeleteAction()
    {
        $modelCreated = $this->factory->create();
        $attributes = $this->removeTimestamps($modelCreated->toArray());
        $modelCreatedAttributes = $this->removeTimestamps($modelCreated->toArray());

        $model = execute($this->action, $attributes);

        if (in_array(SoftDeletes::class, class_uses_recursive($modelCreated), true)) {
            $this->assertSoftDeleted($modelCreated->getTable(), deletedAtColumn: $modelCreated->getDeletedAtColumn());
            $this->assertDatabaseCount($modelCreated->getTable(), 1);
        } else {
            $this->assertDatabaseMissing($modelCreated->getTable(), $modelCreatedAttributes);
            $this->assertDatabaseCount($modelCreated->getTable(), 0);
        }

        return $model;
    }
}
