<?php include('../6.Sesion/conexionDB/conexion.php'); ?>

<?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $post="";

    if ($nombre=="" || $apellido=="" || $edad="" || $user="" || $password=="" || $_POST['rol']=="Seleccione un rol"){

        echo '<script language="javascript">';
        echo 'alert("Datos incorrectos o incompletos")';
        echo '</script>';

        echo '<script language="javascript">';
        echo 'window.location.href="registro.php";';
        echo '</script>';

    } else {

        if ($_POST['rol'] == "Administrador") {
            $post=1;
        } else if ($_POST['rol'] == "Usuario") {
            $post=2;
        }
        $sql= "INSERT INTO PERSONA (Nombre,Apellidos,Edad,Usuario,Contrasena,ROL_Id_Rol) VALUES ('".$nombre."','".$apellido."','".$_POST['edad']."','".$_POST['user']."','".$_POST['password']."','".$post."')";


        if ($conexion->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("Registro completo")';
            echo '</script>';
            echo '<script language="javascript">';
            echo 'window.location.href="registro.php";';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Error")';
            echo '</script>';
            echo '<script language="javascript">';
            echo 'window.location.href="registro.phph";';
            echo '</script>';
        }

        $conexion ->close();
    }

?>
