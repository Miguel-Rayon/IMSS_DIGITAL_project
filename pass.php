<?php
    include('conn.php');

    $correo=$_POST["txtcorreo"];

    $queryusuario 	= mysqli_query($conn,"SELECT * FROM users WHERE email = '$correo'");
    $nr 			= mysqli_num_rows($queryusuario); 
    if ($nr == 1)
    {
        $mostrar		= mysqli_fetch_array($queryusuario); 
        $enviarpass 	= $mostrar['password'];

        $paracorreo 		= $correo;
        $titulo				= "Recuperar contraseña";
        $mensaje			= $enviarpass;
        $tucorreo			= "From: dante4629@gmail.com";

    if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
    {
        echo "<script> alert('Contraseña enviado');window.location= 'login.php' </script>";
    }else
    {
        echo "<script> alert('Error');window.location= 'login.php' </script>";
    }
    }
    else
    {
        echo "<script> alert('Este correo no existe');window.location= 'login.php' </script>";
    }

?>