
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="http://www.imss.gob.mx/sites/all/statics/favicon.ico">
    <title>Imss Digital</title>
</head>
<body>
    <?php require 'partial/header.php' ?>

    <h1>Recupere su contraseña</h1>
    <div class="Formulario">
        <form action="pass.php" action="POST">
            <label>Email</label>
            <input type="text" name="txtcorreo"  placeholder="Email"><br>
            <br>
            <a href="#"></a><br>
            <input type="submit" value="Recuperar" onClick="javascript: return confirm('¿Deseas enviar tu contraseña a tu correo?');" ><br>
            <a href="login.php">Regresar</a>
          </form>
    </div>
</body>
</html>