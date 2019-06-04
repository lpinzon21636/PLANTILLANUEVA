<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="web-name" content="Ecodomotica" />
    <meta http-equiv="refresh" content="30">
    <meta name="description" content="Pagina web y aplicación móvil para realizar el seguimiento y control del gasto eléctrico, así como la generación de alarmas en caso de que exista un consumo excesivo, con el fin de generar un menor registro del consumo lumínico." />
    <meta name="keywords" content="Domotica, gestión eléctrica,sistema inteligente" />
    <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body id="body">
   <?php
    /**
    *Método que inicializa la sesión al
    *momento de validar datos de usuario en página
    *de validaciones
    **/
    session_start();?>
    <!-- NAVBAR -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5><a class="nav-link " data-value="teamwork" href="../5.Inicio_Sesion/inicio_sesion.php">Salir</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="1.home.php">Interruptores</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="2.userInfo.php">Información del usuario</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="3.INFOPREDIO.php">Información del predio</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="4.NOTIFICACIONES.php">Notificaciones</a></h5>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ECODOMOTICA APP</a>
            <button onclick="cambiar();">Dark</button>
			<button onclick="cambiar2();">Light</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
