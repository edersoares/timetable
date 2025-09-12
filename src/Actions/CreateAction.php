<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Actions;

use Illuminate\Database\Eloquent\Model;

class CreateAction extends OperationAction
{
    protected function operation(array $data): Model
    {
        $builder = $this->builder();

        return $builder->create($data);
    }
}
