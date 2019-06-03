<?php include('conexionDB/conexion.php'); ?>
<?php
    if ($_POST['correo']== "" || $_POST['contrasena']== "") {
       echo '<script language="javascript">';
        echo 'alert("Datos incorrectos o incompletos")';  //not showing an alert box.
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href="../5.Inicio_Sesion/inicio_sesion.php";';
        echo '</script>';
    } else {
        $sql="SELECT COUNT(*) FROM PERSONA WHERE Usuario='".$_POST['correo']."' AND Contrasena='".$_POST['contrasena']."'";
        echo $sql;
        $result = mysql_query($sql,$conexion);
        echo mysql_result($result,0,'COUNT');


    }
?>
