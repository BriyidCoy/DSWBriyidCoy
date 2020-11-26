<?php
    $Destino = "dayiscoy19@gmail.com";
    $Nombre = $_POST["Nombre"]; 
    $Correo_electrónico = $_POST["Correo electrónico"];
    $Teléfono = $_POST["Teléfono"];
    $Mensaje = $_POST["Mensaje"];
    $Contenido = "Nombre:". $Nombre. "\nCorreo:". $Correo_electrónico. "\nTeléfono:". $Teléfono. "\nMensaje". $Mensaje;
    mail($Destino, "Contacto git", $Contenido);
?>