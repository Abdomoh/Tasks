<?php

namespace App\Services;
 
use App\Models\Task;
 
class TaskService
{
    public function create(array $taskData): Task
    {
        $task = Task::create($taskData);
 
        return $task;
    }
}