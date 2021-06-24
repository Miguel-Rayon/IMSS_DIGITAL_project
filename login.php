<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /imss');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Location: /imss');
    } else {
      $message = 'No coinciden los datos, vuelve a intertarlo!';
    }
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="http://www.imss.gob.mx/sites/all/statics/favicon.ico">
    <link rel="stylesheet" href="main.css">
    <title>Imss Digital</title>
</head>
<body>
    <?php require 'partial/header.php' ?>

    <?php require 'partial/sidebar.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Inicie Sesion</h1>
    <div class="Formulario">
        <img src="img/login.png"  class="avatar" alt="Avatar Image">
        <form action="login.php" method="POST">
            <label>Correo Electronico</label>
            <input name="email"  type="text" placeholder="Coloque su Email">
            <label>Contraseña</label>
            <input name="password" type="password"  placeholder="Coloque su contraseña"><br>
            <a href="#"></a><br>
            <input type="submit" value="Iniciar sesion"><br>
            <a href="recuperar.php">Olvido su contraseña?</a><br>
            <a href="signup.php">Aun no tiene cuenta? Registrese!</a>
          </form>
    </div>
    
</body>
</html>