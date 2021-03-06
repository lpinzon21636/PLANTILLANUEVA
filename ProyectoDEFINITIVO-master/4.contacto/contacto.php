<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Ecodomótica</title>
</head>
<body>
    <!-- NAVBAR -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5><a class="nav-link " data-value="proyecto" href="../index.php">Inicio</a></h5>
                <h5><a class="nav-link " data-value="proyecto" href="../2.acerca_de/acercaDe.php">Acerca De</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="../3.teamwork/teamwork.php">Equipo de trabajo</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="../7.Registro/registro.php">Registrate</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="../5.Inicio_Sesion/inicio_sesion.php">Iniciar Sesión</a></h5>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">CONTACTANOS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <main>
      <div>
        <div class="divInterno">
            <form id="formulario">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h1>Contáctanos para más información</h1>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 right">
                        <div>
                            <input id ="NombreApellido" type="text" class="form-control form-control-lg" placeholder="Nombres y Apellidos" name="">
                        </div>
                        <div>
                            <input id="correo" type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
                        </div>
                        <div>
                            <textarea id="contenido" class="form-control form-control-lg"></textarea>
                        </div>
                        <input id="enviarFormulario" type="button" class="btn btn-secondary btn-block" value="Enviar" name="" >
                    </div>
                </div>
            </form>
        </div>
      </div>
    </main>

    <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>



        <!-- Linea de código donde se enlaza el código de JavaScript -->
    <script src="../JavaScript/main.js" type="text/javascript"></script>



</body>
</html>
