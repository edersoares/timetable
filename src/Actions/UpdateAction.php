<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions;

use Illuminate\Database\Eloquent\Model;

class UpdateAction extends OperationAction
{
    protected function operation(array $data): Model
    {
        $builder = $this->builder();

        $model = $builder->findOrFail($data[$builder->getModel()->getKeyName()]);

        $model->fill($data);
        $model->saveOrFail();

        return $model;
    }
}
