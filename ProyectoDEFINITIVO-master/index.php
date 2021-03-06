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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ecodomótica</title>
</head>
<body>
    <!-- NAVBAR -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5><a class="nav-link " data-value="proyecto" href="2.acerca_de/acercaDe.php">Acerca De</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="3.teamwork/teamwork.php">Equipo de trabajo</a></h5>
                <h5><a class="nav-link " data-value="contacto" href="4.contacto/contacto.php">Contacto</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="7.Registro/registro.php">Registrate</a></h5>
                <h5><a class="nav-link " data-value="teamwork" href="5.Inicio_Sesion/inicio_sesion.php">Iniciar Sesión</a></h5>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ECODOMOTICA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <main>
        <div>
            <div class="divInterno">
                <h1 align="center">Ecodomótica</h1>
                <p class="Encabezado">Acá encontraras una nueva manera de gestionar el consumo de electricidad en tu hogar.</p>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Qué es Domótica?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>La domotica es la integración de tecnología en el hogar. Esto permite a viviendas y edificios gestionar de manera eficente la energía, siendo una manera confortable y segura para los beneficiarios.  El objetivo principal de la instalación de la domótica es hacer el máximo aprovechamiento de energía y luz solar incoorporando su comportamiento a las necesidades que se presenten en el hogar. Por otro lado, la domótica se puede implementar en cualquier ámbito. Por ejemplo, los controladores de la iluminación, gas, sistemas automáticos de cortinas, la calefacción incluyendo el sistema de gestión del agua, entre otro más. Esta automatización dentro del hogar le brinda al usuario un ahorro en el agua, gas y electricidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿En que la podemos aplicar?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>La domotica cuenta con un incontable número de posibles aplicaciones gracias a las diversas necesidades que un usuario puede presentan. Sin embargo, las más comunes son con respecto al ahorro energético, por consiguiente esta herramienta es implementada en:</p>
                                <ul>
                                    <li>Transmisión de alarmas.</li>
                                    <li>Simulación de presencia.</li>
                                    <li>utomatización de la luz modo apagado/encendido.</li>
                                    <li>Permite regular la iluminación dependiendo de la luminosidad ambiente.</li>
                                    <li>Integración del portero al télefono, o del videoportero al televisor.</li>
                                    <li>Control remoto.</li>
                                    <li>Descubrimiento de un presunto intruso.</li>
                                    <li>Automatización de todos los diversos sistemas, instalaciones y/o equipos, proporsionando un control eficiente y de fácil manejo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-example divInterno">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" ba>
                            <div class="carousel-item active">
                                <img src="Images/imageIndex1.jpeg" class="imagen-adaptativa2 d-block">
                            </div>
                            <div class="carousel-item">
                                <img src="Images/imageIndex2.jpeg" class="imagen-adaptativa3 d-block">
                            </div>
                            <div class="carousel-item">
                                <img src="Images/imageIndex3.jpeg" class="imagen-adaptativa4 d-block">
                            </div>
                            <div class="carousel-item">
                                <img src="Images/imageIndex4.jpeg" class="imagen-adaptativa4 d-block">
                            </div>
                            <div class="carousel-item">
                                <img src="Images/imageIndex5.jpeg" class="imagen-adaptativa4 d-block">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>


</body>
</html>
