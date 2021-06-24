<?php
session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION['user_id']) !="0") {
header('Location: /imss');
}

$pregunta1 = $_POST['PreguntaUno'];
		$pregunta2 = $_POST['PreguntaDos'];
		$pregunta3 = $_POST['PreguntaTres'];
		$pregunta4 = $_POST['PreguntaCuatro'];
		
		$mensaje = "";
		
		$puntos = 0;

	if($pregunta1 == "v")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta2 == "v")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta3 == "v")
	{
		$puntos = $puntos + 3;
	}
	if($pregunta4 == "v")
	{
		$puntos = $puntos + 3;
	}
    if(($puntos==0)){
        $mensaje="Se encuentra completamente sano siga cuidandose c:";
    }
	
	if(($puntos == 3) || ($puntos == 6))
	{
		$mensaje="Baja Posiblidad de haber contraido Covid-19, para mas seguridad visite a su medico general.";
	} else if (($puntos == 9))
	{
		$mensaje="Es probable que presente sintomas leves recomendamos que asista a su medico.";
	} else if ($puntos == 12)
	{
		$mensaje="Alta probablidad de Covid-19, ASISTA LO ANTES POSIBLE A SU UNIDAD MEDICA.";
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
    <title>Resultado test</title>
</head>
<body>
<?php require 'partial/header.php' ?>

<h1>Resultado</h1><br>
<div class="alert alert-danger text-center" role="alert">
    <?php  echo $mensaje; ?>
    </div> <br>

    <button onclick="location.href='index.php'" class="button background2-left-column" >Inicio</button>

</body>
</html>