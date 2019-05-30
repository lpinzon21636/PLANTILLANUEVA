<?php
    $conexion= new mysqli('localhost','santiago','santiago','ecodomotica');
    if($conexion -> connect_errno){
        echo 'no hay conexion';
    } else {
        echo 'conectado';
    }
?>
