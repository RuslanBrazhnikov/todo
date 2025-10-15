<?php

//конфигурация
require_once("./config.php");

?>

<!DOCTYPE html>
<html lang="ru">

<?php include(ROOT . "templates/page_parts/head.tpl"); ?>

<body class="todo-app p-5">

  <?php include(ROOT . "templates/page_parts/header.tpl"); ?>

  <!-- List -->
  <ul class="list-group mb-3">
    <?php include(ROOT . "templates/empty.tpl"); ?>
    <?php include(ROOT . "templates/task.tpl"); ?>
  </ul>

  <?php include(ROOT . "templates/form.tpl"); ?>

</body>
</html>