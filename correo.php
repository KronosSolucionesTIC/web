<?php
if (isset($_POST['ip'])) {
    $ip  = $_POST['ip'];
    $fecha  = $_POST['fecha'];
    $r       = '';

    $msjCorreo = "IP:\n $ip \n Fecha:\n $fecha";

    if (mail("kronossolucionestic@gmail.com", "IP", $msjCorreo)) {
        $r = '';
    } else {
        $r = '';
    }

    echo json_encode($r); //imprime el json
}
