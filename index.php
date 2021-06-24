<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
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
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Imss Digital</title>
</head>
<body>
    <?php require 'partial/header.php' ?>

    <?php require 'partial/sidebar.php' ?>

    <h1>Bienvenido a IMSS Digital</h1><br>

    <div class="containe">

	<div class="card">
		<div class="left-column background2-left-column">
			<img src="img/calendario.png" class="logo">
						
		</div>

		<div class="right-column">
			<div>
				<h4>Agenda de citas</h4>
		    </div>
			  <p>Ahorre largas Filas y agende su cita de modo online</p>
			<button onclick="location.href='Agenda.php'"  class="button background2-left-column">Empezar</button>
		</div>

	  </div>

    <div class="card">
		<div class="left-column background2-left-column">
			<img src="img/cambio.png" class="logo">
						
		</div>

		<div class="right-column">
			<div>
				<h4>Cambio de Clinica</h4>
		    </div>
			  <p>Cambio de localidad? Tramite su Cambio de Clinica</p>
			<button onclick="location.href='cambios.php'" class="button background2-left-column">Empezar</button>
		</div>

	  </div><br>

    <div class="card">
		<div class="left-column background2-left-column">
			<img src="img/document.png" class="logo">
						
		</div>

		<div class="right-column">
			<div>
				<h4>Test SARS-COV-2</h4>
		    </div>
			  <p>Test para saber si es positivo ante el SARS-COV-2 (Consulte a su medico para mayor seguridad)</p>
			<button onclick="location.href='Encuesta.php'" class="button background2-left-column">Empezar</button>
		</div>

	  </div>

    <div class="card">
		<div class="left-column background2-left-column">
			<img src="img/mapa.png" class="logo">
					
		</div>

		<div class="right-column">
			<div>
				<h4>Ubique su Clinica mas cercana</h4>
		    </div>
			  <p>Acceda al mapa para ver su clinica mas cercana</p>
			<button onclick="location.href='mapa.php'" class="button background2-left-column">Empezar</button>
		</div>
	  </div>
  </div>
</body>
</html>