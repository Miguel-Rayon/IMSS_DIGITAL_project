<?php
    $destinatario='miguel.hdz.rayon@gmail.com'; 

   //Datos que se enviaran al correo
    $nombre=$_POST['nombre'];
    $curp=$_POST['curp'];
    $email=$_POST['email'];
    $asunto=$_POST['asunto'];
    $mensaje=$_POST['mensaje'];
    // Creacion del correo final
    $header="Enviado desde IMSS Digital";
    $mensajeCompleto= $mensaje . "\n Atentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo"<script>alert('Correo enviado exitosamente')</script>";
    echo"<script> setTimeout(\"location.href='index.php'\", 1000)</script>";
?>