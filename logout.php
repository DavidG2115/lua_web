<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /lua_login/login.php');
?>
