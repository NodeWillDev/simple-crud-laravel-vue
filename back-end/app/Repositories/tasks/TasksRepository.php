<?php

namespace App\Repositories\tasks;

use App\Models\task\TaskModel;

class TasksRepository
{
    /**
     * @param array{title:string,status:int,description:string} $data
     */
    public static function create(array $data)
    {
        return TaskModel::create($data);
    }
}
