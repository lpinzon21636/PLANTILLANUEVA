<?php include('../conexionDB/conexion.php'); ?>
<?php
    /**
    *
    * Creación de Predios y Zonas
    *
    * Implementación de MySQL y PHP para la creación del predio
    * en el cual el usuario podrá cambiar los estados de las luces.
    * además de ser generadas automáticamente las zonas identificadas
    * como Sala y Comedor
    *
    **/
    $estrato=$_POST['estrato'];
    $direccion=$_POST['direccion'];
    $numHab=$_POST['numHab'];
    /**
    *
    * Sentencia SQL para crear el nuevo Predio
    *
    **/
    $sql="INSERT INTO PREDIO (Estrato, Direccion, Numero_Habitaciones, PERSONA_Id_persona) VALUES ('".$estrato."','".$direccion."','".$numHab."','".$_COOKIE['id_persona']."')";

    /**
    *
    * Condicional if para comprobar el correcto funcionamiento
    * de las consultas SQL
    *
    **/
    if ($conexion->query($sql) === TRUE) {
        $inZON="SELECT * FROM PREDIO WHERE PERSONA_Id_persona='".$_COOKIE['id_persona']."'";
        $proof=mysqli_query($conexion,$inZON);
        $inZONA=mysqli_fetch_array($proof);
        echo $inZONA['Id_Predio'];
        /**
        *
        * Sentencias SQL para la creación de las zonas definidas
        * como Sala y Comedor
        *
        **/
        $sqlZ1="INSERT INTO ZONAS (Nombre_area,PREDIO_Id_Predio,Estado_Luz) VALUES ('Sala',".$inZONA['Id_Predio'].",FALSE)";
        $sqlZ2="INSERT INTO ZONAS (Nombre_area,PREDIO_Id_Predio,Estado_Luz) VALUES ('Comedor',".$inZONA['Id_Predio'].",FALSE)";
        echo $sqlZ1;
        echo $sqlZ2;
        if ($conexion->query($sqlZ1) === TRUE && $conexion->query($sqlZ2) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("Predio creado correctamente")';
            echo '</script>';
            echo '<script language="javascript">';
            echo 'window.location.href="../1.home.php";';
            echo '</script>';
        } else {
             echo "Error: " . $sentenciaSQL . "<br>" . $conexion->error;
        }

    } else {
        echo 'No ejecutado.';
    }



?>
