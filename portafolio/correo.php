<?php
if (isset($_POST['nombre'])) {
    $nombre  = $_POST['nombre'];
    $email   = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para    = 'kronossolucionestic@gmail.com';
    $titulo  = 'Enviado desde el sitio web';
    $submit  = $_POST['submit'];
    $r       = '';

    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
}

if (isset($_POST['submit'])) {
    if (mail($para, $titulo, $msjCorreo)) {
        $r = 'El mensaje se ha enviado';
    } else {
        $r = 'Falló el envio';
    }
}

echo json_encode($r); //imprime el json
