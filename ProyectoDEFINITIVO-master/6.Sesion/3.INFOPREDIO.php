
<title>Info Predio</title>
<?php include('templantes/header.php');?>
<?php include('conexionDB/conexion.php')?>

<!-- Formulario -->
<form class="form-type-send" action="PREDIO/conPRED.php" method="post">
    <div class="form-group">
        <label for="exampleInputPassword1">Estrato</label>
        <select id="estrato" name="estrato" class="form-control ">
            <option>Seleccione un Estrato</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Dirección</label>
        <input type="text" class="form-control" id="direccion" name ="direccion" aria-describedby="emailHelp" placeholder="Ingrese la dirección de su predio" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Número de habitaciones</label>
        <input type="number" class="form-control" id="numHab" name ="numHab" aria-describedby="emailHelp" placeholder="Ingrese el número de habitaciones de su predio" required>
    </div>
    <button id="sendForm" type="submit" class="btn btn-primary" value="send">Enviar</button>
</form>



<div class="form-type-send">
<table class="form-type-send table">
    <tr>
        <td>Identificador</td>
        <td>Estrato</td>
        <td>Dirección</td>
        <td>Número de Habitaciones</td>
    </tr>
    <?php
        $sql="SELECT * FROM PREDIO WHERE PERSONA_Id_persona='".$_COOKIE['id_persona']."'";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['Id_Predio'] ?></td>
        <td><?php echo $mostrar['Estrato'] ?></td>
        <td><?php echo $mostrar['Direccion'] ?></td>
        <td><?php echo $mostrar['Numero_Habitaciones'] ?></td>
    </tr>
    <?php
        }
    ?>
</table>
</div>
<?php include('templantes/footer.php')?>
