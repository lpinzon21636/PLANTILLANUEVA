<?php
    $server='localhost';
    $user='santiago';
    $contra='santiago';
    $db='ecodomotica';

    $conexion= new mysqli($server,$user,$contra,$db);

    if ($conexion -> conect_errno){
        echo 'No hay conexion';
    } else {
        echo 'si hay conexion';
    }

?>
