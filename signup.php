<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado con exito';
    } else {
      $message = 'Usuario ya existe';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>



    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="container">
      <div class="form-content">

        
              <h1>Registrate</h1>
              <span>o <a href="login.php">Inicia sesion</a></span>
          
              <form action="signup.php" method="POST">
                <input name="email" type="text" placeholder="Correo electronico">
                <input name="password" type="password" placeholder="Contraseña">
                <input name="confirm_password" type="password" placeholder="Confirmar Contraseña">
                <input type="submit" value="Registrarse">
              </form>
      </div>

    </div>

  </body>
</html>
