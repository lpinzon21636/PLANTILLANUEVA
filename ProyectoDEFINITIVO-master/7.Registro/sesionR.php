<?php include('../6.Sesion/conexionDB/conexion.php'); ?>

<?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $user=$_POST['user'];
echo $user;
    $password=$_POST['password'];
echo $password;
$post="";

    if ($nombre=="" || $apellido=="" || $edad="" || $user="" || $password=="" || $_POST['rol']=="Seleccione un rol"){

        echo '<script language="javascript">';
        echo 'alert("Datos incorrectos o incompletos")';  //not showing an alert box.
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
        $sql= "INSERT INTO PERSONA (Nombre,Apellido,Edad,Usuario,Contrasena,ROL_Id_Rol) VALUES ('".$nombre."','".$apellido."','".$_POST['edad']."','".$_POST['user']."','".$_POST['password']."','".$post."')";
        echo $sql;

        if ($conexion->query($sql) === TRUE) {
            echo "Usuario creado";
        } else {
            echo "Error: " . $sentenciaSQL . "<br>" . $conexion->error;
        }

        $conexion ->close();
    }

?>
