<?php

//конфигурация подключения 
require_once('./config.php');
require_once('./db.php');

// Модели
require_once(ROOT . './tasks/task_new.php');
require_once(ROOT . './tasks/task_delete.php');
require_once(ROOT . './tasks/task_change_status.php');
require_once(ROOT . './tasks/task_get_all.php');
require_once(ROOT . './tasks/get_stat.php');




// ЗАДАЧА СОЗДАТЬ
if (isset($_POST['title']) && !empty(trim($_POST['title']))) {
  task_new($_POST['title']);
}

// ЗАДАЧА УДАЛИТЬ
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']) && is_numeric($_GET['id'])) {
  task_delete($_GET['id']);
}

// ЗАДАЧА: ИЗМЕНЕНИЕ СТАТУСА
if (isset($_GET['action']) && $_GET['action'] === 'changeStatus' && isset($_GET['id']) && is_numeric($_GET['id'])) {
// Загружаем задачу
  task_change_status($_GET['id']);
}

 


// Получение всех задач
$tasks = task_get_all();

// Подсчет статистики
$statistics = get_stat($tasks);

?>

<!DOCTYPE html>
<html lang="ru">

<?php include(ROOT . "templates/page_parts/head.tpl"); ?>

<body class="todo-app p-5">

  <?php include(ROOT . "templates/page_parts/header.tpl"); ?>

  <!-- List -->
  <ul class="list-group mb-3">
    <?php
    

    if (empty($tasks)) {
      include(ROOT . "templates/empty.tpl");
    } else {
      foreach ($tasks as $task) {
        include(ROOT . "templates/task.tpl");
      }
    }
    ?>
  </ul>

  <?php include(ROOT . "templates/form.tpl"); ?>

</body>

</html>