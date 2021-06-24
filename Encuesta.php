<?php
session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION['user_id']) !="0") {
header('Location: /imss');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="http://www.imss.gob.mx/sites/all/statics/favicon.ico">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Test</title>
</head>
<body>

<?php require 'partial/header.php' ?>

<?php require 'partial/sidebar.php' ?>

<h1>Test Covid 19</h1><br>

<div class="container">

    <div class="alert alert-success text-center" role="alert">
        NOTA: Para el correcto funcionamiento del Cuestionario COVID, por favor use el navegador Google Chrome.
    </div>
    <div class="alert alert-info text-center" role="alert">
        El Cuestionario y Permiso COVID-19, son herramientas digitales para los asegurados que requieran su Permiso COVID-19 y cuenten con un
        resultado positivo de prueba de laboratorio por SARS CoV-2. No sustituyen un diagnóstico médico, si presentas deterioro en tu salud, acude
        inmediatamente a tu Unidad Médica para recibir la atención necesaria.
    </div>
    <br>

    <button onclick="location.href='Test.php'" class="button background2-left-column" >Comenzar</button>

    

</div>
</body>
</html>