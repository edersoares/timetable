<?php

namespace Portabilis\Timetable\Actions;

class Executor
{
    public function execute(string $action, array $data)
    {
        $handler = app($action);

        return $handler->execute($data);
    }
}
