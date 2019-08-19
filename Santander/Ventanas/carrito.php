<?php
include '../metodosDB/metodosDAO.php';
session_start();
$eliminar=(isset($_POST['eliminar']))?$_POST['eliminar']:"";
$total=0;

echo $eliminar;
if (isset($eliminar)) {
	echo $eliminar;
	unset($carrito);
		for ($i=0; $i < count($_SESSION['carrito']) ; $i++) { 
			if ($eliminar!=$_SESSION['carrito'][$i][0]) {
				$carrito[]=$_SESSION['carrito'][$i];
			}
		}
		$_SESSION['carrito']=$carrito;
}else{
	$carrito[]=$_SESSION['carrito'];
}
//$carrito=$_SESSION['carrito'];


for ($i=0; $i <count($carrito) ; $i++){
	if(isset($carrito[$i])){
		$objMetodo=new MetodosDB();
		$lista=$objMetodo->ListPCD($carrito[$i]);
		foreach ($lista as $row) {
			$clista[]=$row;
		}
	}
}

/*
	if (isset($eliminar)) {
		for ($i=0; $i < count($_SESSION['carrito']) ; $i++) { 
			if ($id==$_SESSION['carrito'][$i]) {
				unset($_SESSION['carrito'][$i]);
			}
		}
	}*/


?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrito</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Restaurant Santanders</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Menú</a></li>
      <li><a href="ventanas/carrito.php" target="_black">Carrito</a></li>
      <li><a href="paquetes.html">Paquetes</a></li>
      <li><a href="complementos.php">Adicionales</a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a></a></li>
      <li><a href="inicios.php">Login</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>


	<h1>Carrito</h1>
	<form   class="carrito" action="" method="post">
		<?php


			foreach ($clista as $reg) {
				echo $reg[1];
				$total+=$reg[2];
				?>
				<table  >
					<thead>
					<tr>
						<br>
				<img src="../img/<?php echo $reg[4]; ?>"><br>
				<button value="<?php echo $reg[0]; ?>" type="submit" name="eliminar">Eliminar</button>
				</tr>
				</thead>
				</table>
				
				<br>

				


				<?php


			}
		?>
		

		<?php echo "Total:$total"; $_SESSION['total']=$total;?>
	</form>
	<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
								
								<div class="col-sm-12">
									<div class="item-content colBottomMargin">
										<div class="item-info">
											<h2 class="item-title text-center">Restaurante Santander's</h2>
											<h4 class="item-title text-center">Servicio a Domicilio</h4>
											
										</div><!--End item-info -->
										
								   </div><!--End item-content -->
								</div><!--End col -->
								<div class="col-md-12">
								
								
								<form id="contactForm" name="contactform" data-toggle="validator" class="popup-form" action="../pago.php">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>
													
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="fname" id="fname" placeholder="Tu nombre completo*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre"> 
														<div class="input-group-icon"><i class="fa fa-user"></i></div>
													</div><!-- end form-group -->

													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
														<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="subject" id="subject" placeholder="Pago Efectivo / Tarjeta*" class="form-control" type="text" required data-error="Por favor ingresa el tipo de pago">
														<div class="input-group-icon"><i class="fa fa-book"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-12">
														<div class="help-block with-errors"></div>
														<textarea rows="3" name="message" id="message" placeholder="Dirección Completa*" class="form-control" required data-error="Por favor ingresa una direccion valida"></textarea>
														<div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
													</div><!-- end form-group -->
													
													<div class="form-group last col-sm-12">
														<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope' ></i> Enviar</button>
													</div><!-- end form-group -->	
											
													<span class="sub-text">* Campos requeridos</span>
													<div class="clearfix"></div>
												</div><!-- end row -->


											</form><!-- end form -->
											
											
									
									
								  
								
								</div>
							</div><!--End row -->
							
						
								
							
							<!-- Popup end -->
							
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
	
</body>
</html>