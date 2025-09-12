<?php

namespace Portabilis\Timetable\Actions;

class DeleteAction extends OperationAction
{
    protected function operation(array $data)
    {
        $builder = $this->builder();

        $model = $builder->findOrFail($data[$builder->getModel()->getKeyName()]);

        $model->deleteOrFail();

        return $model;
    }
}
