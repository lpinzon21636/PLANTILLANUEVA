<?php include('conexionDB/conexion.php'); ?>
<?php

    $sql="SELECT * FROM PERSONA WHERE Usuario='".$_POST['correo']."' AND Contrasena='".$_POST['contrasena']."'";
    $result = mysqli_query($conexion,$sql);
    if (mysqli_num_rows($result) == 0) {
        echo '<script language="javascript">';
        echo 'alert("Usuario o contraseña incorrecta")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href="../5.Inicio_Sesion/inicio_sesion.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Bienvenido")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href="1.home.php";';
        echo '</script>';
    }

?>
