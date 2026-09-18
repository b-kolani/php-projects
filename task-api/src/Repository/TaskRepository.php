<?php

namespace Kolani\TaskApi\Repository;

use Kolani\TaskApi\Task;

class TaskRepository
{

    public function save(Task $task): Task
    {
        return $task;
    }
}