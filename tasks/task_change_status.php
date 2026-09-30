<?php

function task_change_status($id)
{
    $task = R::load('tasks', $id);

    // Обновляем статус задачи
    if ($task->status === 'ready') {
        $task->status = NULL;
    } else {
        $task->status = 'ready';
    }
    R::store($task);
}
