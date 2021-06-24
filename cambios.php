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

::before,
::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.Tramite{
    font-family: 'Poppins', sans-serif;
    width: 100%;
    height:650px;
    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    position: absolute;
    background: rgba(0, 0, 0, 0.6);
    color: rgb(27, 26, 26);
    width: 30%;
    padding: 10px 0;
    border-radius: 10px;
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px;
}

input, textarea{
    background: none;
    color:#c6c6c6;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border:none;
    border-bottom: 1px solid var(--colorTextos);
    resize: none;
}

input:focus,textarea:focus{
    outline: none;
    color: rgb(94,93,93);
}

input:focus~label, 
input:valid~label, 
textarea:focus~label, textarea:valid~label{
    position: absolute;
    top: -14px;
    font-size: 12px;
    color: #2196F3;
}

label{
    color: beige;
    font-size: 16px;
    position: absolute;
    left: 5px;
    top:10px;
    transition: 0.5s ease all;
    pointer-events: none;
}


input:focus~.barra::before, textarea:focus~.barra::before{
    width: 100%;
}
.barra{
    position: relative;
    display: block;
    width: 100%;
}
.barra::before{
    content: '';
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to right, #6A82FB, #FC5C7D);
    transition: 0.3s ease all;
    left: 0%;
}
button{
    background: #FC5C7D;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #6A82FB, #FC5C7D);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #6A82FB, #FC5C7D);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    display: block;
    width: 100px;
    height: 40px;
    border:none;
    color:#fff; 
    border-radius: 4px;
    font-size: 16px;
    margin: 10px auto;
    cursor: pointer;
}

@media screen and (max-width:1100px){
    form{
        width: 50%;
    }
}
@media screen and (max-width:600px){
    form{
        width: 60%;
    }
}

@media screen and (max-width:450px){
    form{
        width: 80%;
    }
}

@media screen and (max-width:300px){
    form{
        width: 90%;
    }
}
    </style>
    <title>Cambio de Clinica</title>
</head>
<body>
<?php require 'partial/header.php' ?>
<?php require 'partial/sidebar.php' ?>
<h1>Cambio de clínica</h1>
<div class="Tramite">
    <form action="correo.php" method="POST">
        <div class="form">
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="curp" id="" required><span class="barra"></span>
                <label>CURP</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="asunto" name="asunto" id="" required><span class="barra"></span>
                <label>Asunto</label>
            </div>
            <div class="grupo">
                <textarea name="mensaje" id="" rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button type="submit">enviar</button>
        </div>
    </form>
</div>
</body>
</html>