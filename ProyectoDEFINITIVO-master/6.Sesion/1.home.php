<title>Interruptores</title>
   <?php include('templantes/header.php');?>
   <?php include('conexionDB/conexion.php')?>
   <div>

   </div>
    <main>
        <div style="margin-left:5%; margin-top:5%; margin-right:5%; background: none;">
    		<div class="accordion" id="accordionExample" style="background: none;">
                <div class="card" style="background: none;">
                    <div class="card-header" id="headingOne" style="background: #9E9D9D;">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #121CB9">
                                Sala
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="background: none;">
                        <div class="card-body" style="background: none;">
							<div class="row" style="background: none;">
								<div class="col-sm-4">
									<div class="card" style="width: 18rem; background: none;">
						  				<img src="../Images/580b585b2edbce24c47b2798.png" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Bombillos</h5>
											<p class="card-text">Desde aqui usted podrá encender y apagar las luces de la sala. Utilice el interruptor para realizar una acción sobre los bombillos.</p>
											<div align="center" class="custom-control custom-switch">
											    <form name="form1" action="estado/estado.php" method="post">
											    <?php
                                                    /**
                                                    *
                                                    * Sentencia SQL para invocar la información correspondiente
                                                    * al predio por medio del uso de cookies
                                                    *
                                                    **/
                                                    $sql1="SELECT * FROM PREDIO WHERE PERSONA_Id_persona='".$_COOKIE['id_persona']."'";

                                                    $result1=mysqli_query($conexion,$sql1);
                                                    $Pred=mysqli_fetch_array($result1);
                                                    $idPred=$Pred['Id_Predio'];
                                                    /**
                                                    *
                                                    * Sentencia SQL para invocar las zonas correspondientes al predio
                                                    * y poder generar el cambio de estado
                                                    *
                                                    **/
                                                    $sql2="SELECT * FROM ZONAS WHERE PREDIO_Id_Predio='".$idPred."' AND Nombre_area='Sala'";
                                                    $result2=mysqli_query($conexion,$sql2);
                                                    $estado=mysqli_fetch_array($result2);

                                                    /**
                                                    *
                                                    * Condicional que evalúa el estado de las luces e
                                                    * imprime el correspondiente input para hacer notorio si el interruptor
                                                    * está encendido o apagado
                                                    *
                                                    **/
                                                    if ($estado['Estado_luz'] == 0) {

                                                        echo '<input type="checkbox" name="cajita" class="custom-control-input" id="customSwitch2">';
                                                    } else {
                                                        echo '<input type="checkbox" name="cajita" class="custom-control-input" id="customSwitch2" checked>';
                                                    }
                                                ?>

												<label class="custom-control-label" for="customSwitch2"></label>
											    <button id="sendForm" type="submit" class="btn btn-primary" value="send">Actualizar</button>
											    </form>

											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card" style="width: 18rem; background: none;">
						  				<img src="../Images/2357c06358cde99.jpg" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Puertas [PROXIMAMENTE]</h5>
											<p class="card-text">Controle las puertas de la sala, abralas o cierrelas desde el interrumptor.</p>
											<div align="center" class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch3">
												<label class="custom-control-label" for="customSwitch3"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card" style="width: 18rem; background: none;">
						  				<img src="../Images/929b3e551fd485386d0fe0a908e03ac8-icono-de-l--mpara-de-mesa-by-vexels.png" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body">
											<h5 class="card-title">Lamparas de mesa [PROXIMAMENTE]</h5>
											<p class="card-text">Controle el estado de on/off de las luces de mesa que tenga en esta área.</p>
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
                <div class="card" style="background: none;">
                    <div class="card-header" id="headingTwo" style="background: #9E9D9D;">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Comedor
                            </button>
                        </h2>
                    </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="background: none;">
                    <div class="card-body" style="background: none;">
                        <div class="row" style="background: none;">
				            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="card" style="width: 18rem;">
				  				        <img src="../Images/580b585b2edbce24c47b2798.png" class="card-img-top imagen-adaptativa5" alt="...">
								        <div class="card-body">
									        <h5 class="card-title">Bombillos</h5>
									        <p class="card-text">Desde aqui usted podrá encender y apagar las luces del comedor. Utilice el interruptor para realizar una acción sobre los bombillos.</p>
									        <div align="center" class="custom-control custom-switch">
									            <form name="from2" action="estado/estadoDOS.php" method="post">
									            <?php
                                                    /**
                                                    *
                                                    * Sentencia SQL para invocar la información correspondiente
                                                    * al predio por medio del uso de cookies
                                                    *
                                                    **/
                                                    $sqlUNO="SELECT * FROM PREDIO WHERE PERSONA_Id_persona='".$_COOKIE['id_persona']."'";

                                                    $resultUNO=mysqli_query($conexion,$sqlUNO);
                                                    $Predio=mysqli_fetch_array($resultUNO);
                                                    $idPredio=$Predio['Id_Predio'];
                                                    /**
                                                    *
                                                    * Sentencia SQL para invocar las zonas correspondientes al predio
                                                    * y poder generar el cambio de estado
                                                    *
                                                    **/
                                                    $sqlDOS="SELECT * FROM ZONAS WHERE PREDIO_Id_Predio='".$idPredio."' AND Nombre_area='Comedor'";
                                                    $resultDOS=mysqli_query($conexion,$sqlDOS);
                                                    $estadoUNO=mysqli_fetch_array($resultDOS);

                                                    /**
                                                    *
                                                    * Condicional que evalúa el estado de las luces e
                                                    * imprime el correspondiente input para hacer notorio si el interruptor
                                                    * está encendido o apagado
                                                    *
                                                    **/
                                                    if ($estadoUNO['Estado_luz'] == 0) {

                                                        echo '<input type="checkbox" name="cajitaDOS" class="custom-control-input" id="customSwitch5">';
                                                    } else {
                                                        echo '<input type="checkbox" name="cajitaDOS" class="custom-control-input" id="customSwitch5" checked>';
                                                    }
                                                ?>

										        <label class="custom-control-label" for="customSwitch5"></label>
											    <button id="sendFormDOS" type="submit" class="btn btn-primary" value="send">Actualizar</button>
                                                </form>
                                            </div>
								        </div>
							        </div>
                                </div>
                            </div>
								<div class="col-sm-4">
									<div class="card" style="width: 18rem; background: none;">
						  				<img src="../Images/2357c06358cde99.jpg" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body" style="background: none;">
											<h5 class="card-title">Puertas [PROXIMAMENTE]</h5>
											<p class="card-text">Controle las puertas del comedor, abralas o cierrelas desde el interrumptor.</p>
											<div align="center" class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch6">
												<label class="custom-control-label" for="customSwitch6"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4" style="background: none;">
									<div class="card" style="width: 18rem; background: none;">
						  				<img src="../Images/929b3e551fd485386d0fe0a908e03ac8-icono-de-l--mpara-de-mesa-by-vexels.png" class="card-img-top imagen-adaptativa5" alt="...">
										<div class="card-body" style="background: none;">
											<h5 class="card-title">Lamparas de mesa [PROXIMAMENTE]</h5>
									<p class="card-text">Desde aqui usted podrá encender y apagar las luces del comedor. Utilice el interruptor para realizar una acción sobre las lámparas.</p>
											<div align="center" class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch7">
												<label class="custom-control-label" for="customSwitch7"></label>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('templantes/footer.php')?>
