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
    <title>HomeUser</title>
</head>
<body>
    <!-- NAVBAR -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5><a class="nav-link " data-value="teamwork" href="../5.Inicio_Sesion/inicio_sesion.php">Salir</a></h5>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Perfil Usuario</a>
            <div class="custom-control custom-switch" style="align: right;">
			  <input type="checkbox" class="custom-control-input" id="customSwitch1">
			  <label class="custom-control-label" for="customSwitch1"></label>
			</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-targett="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <main>
        <div style="margin-left:5%; margin-top:5%; margin-right:5%">
    		<div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Sala
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
							<div class="row">
								<div class="col-sm-4">
									<div class="card" style="width: 18rem;">
						  				<img src="../Images/580b585b2edbce24c47b2798.png" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<div align="center" class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch2">
												<label class="custom-control-label" for="customSwitch2"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card" style="width: 18rem;">
						  				<img src="../Images/2357c06358cde99.jpg" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<div align="center" class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch3">
												<label class="custom-control-label" for="customSwitch3"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card" style="width: 18rem;">
						  				<img src="../Images/929b3e551fd485386d0fe0a908e03ac8-icono-de-l--mpara-de-mesa-by-vexels.png" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Card title</h5>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
											<div align="center" class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch4">
												<label class="custom-control-label" for="customSwitch4"></label>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Comedor
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
				  				<img src="../Images/580b585b2edbce24c47b2798.png" class="card-img-top imagen-adaptativa5" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<div align="center" class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" id="customSwitch5">
										<label class="custom-control-label" for="customSwitch5"></label>
									</div>
								</div>
							</div>
                        </div>
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
