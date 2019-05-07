<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Interruptor cocina</title>
</head>
<body>
<div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5><a class="nav-link " data-value="proyecto" href="../6.Sesion/2.Sala.php">Interruptor Sala</a></h5>
                <h5><a class="nav-link " data-value="proyecto" href="../5.Inicio_Sesion/inicio_sesion.php">Cerrar sesión</a></h5>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Equipo de trabajo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <!-- Interruptor Cocina-->
    <div>
        <br>
        <center><h3 id="boton_domotica">Interruptor Cocina</h3></center>
        <br>
    </div>
    <div>
        <center>

            <img src="../Images/Power_Button-512.png" id="interruptor" class="apagado">
        </center>
    </div>

    <div>
        <center>
            <h1 id=estado_boton>Estado:</h1>
            <h3 id='estado'></h3>
        </center>
    </div>

    <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>

    <script src="../JavaScript/mainTWO.js" type="text/javascript"></script>

</body>
</html>
