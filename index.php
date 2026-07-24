<?php

//конфигурация подключения 
require_once("./config.php");
require_once('./db.php');

p($_POST);

if (isset($_POST['title']) && !empty(trim())) {

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