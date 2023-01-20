<?php 	



$errores = '';
$enviado = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];    
    $mensaje = $_POST['mensaje'];




    if (!empty($nombre)) {
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        $nombre = trim($nombre);
    }else {
        $errores .= 'Por favor Ingresa un Nombre';
    }

    if (!empty($apellido)) {
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
        $apellido = trim($apellido);
    }else {
        $errores .= 'Por favor Ingresa un apellido';
    }

     if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripcslashes($mensaje);
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
        $mensaje = trim($mensaje);
    }else {
        $errores .= 'Por favor Ingresa un mensaje';
    }


    if (!$errores) {
        $enviar_a = 'medribros@gmail.com';
        $asunto = 'Enviado desde';
        $mensajepreparado = "De: $nombre";
        $mensajepreparado .= "Mensaje: $mensaje";
    mail($enviar_a, $asunto, $mensajepreparado);
    $enviado = 'true';
    }



}

require 'views/index.view.php'
 ?>