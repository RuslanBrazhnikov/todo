<?php

// DB SETING
define('DB_HOST', 'localhost:3306');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'todo');


define("ROOT", dirname(__FILE__) . "/");
define("HOST", "http://" . $_SERVER['HTTP_HOST'] . "/");

// Удобное форматирование
function p($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function pd($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    die();
}
