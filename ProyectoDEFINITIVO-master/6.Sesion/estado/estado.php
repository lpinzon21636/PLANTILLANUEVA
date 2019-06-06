<?php include('../conexionDB/conexion.php'); ?>
<?php
    /**
    * Actualizar estado de luz
    *
    * Segmento de código que permite la integración
    * entre PHP y MySQL, Utilizando las cookies anteriormente
    * almacenadas para invocar los datos del usuario
    * y poder realizar satisfactoriamente el cambio de estado
    * de luz en la báse de datos
    **/
    $sql="SELECT * FROM PREDIO WHERE PERSONA_Id_persona='".$_COOKIE['id_persona']."'";
    $result=mysqli_query($conexion,$sql);
    $Pred=mysqli_fetch_array($result);
    $idPred=$Pred['Id_Predio'];
    if (isset($_POST['cajita'])) {
        $sql2="UPDATE ZONAS SET Estado_luz=1 WHERE ZONAS.PREDIO_Id_Predio=".$idPred." AND Nombre_area='Sala'";
        $result2=mysqli_query($conexion,$sql2);
    } else {
        $sql3="UPDATE ZONAS SET Estado_luz=0 WHERE ZONAS.PREDIO_Id_Predio=".$idPred." AND Nombre_area='Sala'";
        $result3=mysqli_query($conexion,$sql3);
    }
?>


<?php header('location:../1.home.php')?>
