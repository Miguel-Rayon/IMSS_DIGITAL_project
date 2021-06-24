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
    <style>
        .test{
            top: 60%;
            left: 50%;
            box-sizing: border-box;
            position: absolute;
            background: rgba(0, 0, 0, 0.4);
            color: rgb(27, 26, 26);
            transform: translate(-50%, -50%);
            padding: 70px 30px;
            width: 520px;
            height: 570px;
        }
        h4{
            color: beige;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h5{
            color: beige;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        /* Elemento Radio, cuando está marcado */
        input[type="radio"]:checked {
            box-shadow: 0 0 0 3px orange;
        }
        input:checked + label {
            color: red;
        }
        label{
            color: beige;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        input[type="submit"]{
            left: 20%;
        }
    
    </style>
    <title>Test Covid-19</title>
</head>
<body>
    
<?php require 'partial/header.php' ?>


<h1>Test Coronavirus</h1>
<div class="test">
<form action="resultado.php" method="POST">
<h4>1.-Presenta Alguno de los sintomas:</h4>
<h5>-Dolor de cabeza, Dificultad para respirar, Tos seca, cansancio, Fiebre</h5><br>

<input type="radio" class="form-check-input" name="PreguntaUno" value="v" id="v"><label for="v">si</label> <br>
<input type="radio"  name="PreguntaUno" value="f" id="f"><label for="f">no</label>

<h4>2.-Haz presentado perdida del olfato o gusto, asi como dificultad para respirar o dificultad para moverse.</h4>
<input type="radio"  name="PreguntaDos" value="v" id="v"><label for="v">si</label><br>
<input type="radio"  name="PreguntaDos" value="f" id="f"><label for="f">no</label>

<h4>3.- Alguno de tus familiares sufre enfermedades como obesidad, problemas del corazon, presion alta o azucar.</h4>
<input type="radio"  name="PreguntaTres" value="v" id="v"><label for="v">si</label><br>
<input type="radio"  name="PreguntaTres" value="f" id="f"><label for="f">no</label>

<h4>4.- Sufres de enfermedades como obesidad, problemas del corazon, presion alta o azucar </h4>
<input type="radio"  name="PreguntaCuatro" value="v" id="v"><label for="v">si</label><br>
<input type="radio"  name="PreguntaCuatro" value="f" id="f"><label for="f">no</label>


<br>

<input type="submit" class="button background2-left-column" value="Resultado">
</form>
</div>

</body>
</html> 