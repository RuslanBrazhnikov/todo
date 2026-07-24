<?php

//конфигурация подключения 
require_once('./config.php');
require_once('./db.php');


if (isset($_POST['title']) && !empty(trim($_POST['title']))) {
  $task = R::dispense('tasks');
  $task->title = $_POST['title'];
  $id = R::store($task);
  // echo 'ID ' . $id;
}

// ЗАДАЧА УДАЛИТЬ
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']) && is_numeric($_GET['id'])) {
  $task = R::load('tasks', $_GET['id']);
  R::trash($task);
}

?>

<!DOCTYPE html>
<html lang="ru">

<?php include(ROOT . "templates/page_parts/head.tpl"); ?>

<body class="todo-app p-5">

  <?php include(ROOT . "templates/page_parts/header.tpl"); ?>

  <!-- List -->
  <ul class="list-group mb-3">
    <?php
    $tasks = R::findAll('tasks');

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