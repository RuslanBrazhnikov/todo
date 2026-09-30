<?php
function task_get_all()
{
    return $tasks = R::findAll('tasks');
}
