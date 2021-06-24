<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (name, email, curp , password) VALUES (:name, :email, :curp, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':curp', $_POST['curp']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Su cuenta se ha creado exitosamente';
    } else {
      $message = 'Lo sentimos no se ha podido crear su cuenta';
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

    <h1>Registrese!</h1>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="Formulario">
        <img src="img/login.png"  class="avatar" alt="Avatar Image">
        <form action="signup.php" method="POST">
            <label>Nombre</label>
            <input type="text" name="name" placeholder="Coloque su nombre">
            <label>Correo Electronico</label>
            <input type="text" name="email" placeholder="ejemplo@ejemplo.com">
            <label>CURP</label>
            <input type="text" name="curp" placeholder="Coloque su CURP"><br>
            <a href="https://www.gob.mx/curp/">No sabes tu CURP? Consulta aqui</a>
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Coloque su contraseña"><br>
            <a href="#"></a><br>
            <input type="submit" value="Registrar">
            <a href="login.php">Ya tiene Cuenta? Inicie sesion</a>
          </form>
    </div>
    
</body>
</html>