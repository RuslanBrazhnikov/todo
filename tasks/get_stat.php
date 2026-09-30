<?php
function get_stat($tasks)
{
    $count_all = count($tasks);

    // Подсчет выполненых задач
    $count_done = 0;
    foreach ($tasks as $task) {
        if ($task['status'] === 'ready') {
            $count_done++;
        }
    }


    $count_undone = $count_all - $count_done;


    return [
        'count_all' => $count_all,
        'count_done' => $count_done,
        'count_undone' => $count_undone
    ];
}
