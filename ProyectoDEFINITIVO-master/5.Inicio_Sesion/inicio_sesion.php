<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Beta</title>
</head>
<body>
    <!-- NAVBAR -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5><a class="nav-link " data-value="proyecto" href="../1.que_es_domotica/domotica.html">Inicio</a></h5>
                <h5><a class="nav-link " data-value="proyecto" href="../2.acerca_de/acercaDe.html">Acerca De</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="../3.teamwork/teamwork.html">Equipo de trabajo</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="../4.contacto/contacto.html">Contáctanos</a></h5>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Iniciar sesión</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <!--
    <div>
        <br>
        <center><h3 id="boton_domotica">Prueba ecodomótica</h3></center>
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
    -->

    <form class="form-type-send" action='sesion.php' method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Ingresa tu cuenta de usuario de forma segura</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>

    <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>

    <script src="../JavaScript/mainTWO.js" type="text/javascript"></script>

</body>
</html>