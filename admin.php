<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/actualizarVotos.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<header>
		<hr>
		<div class="container">
		    <div class="hero-unit">
		    	<h1>Resultados Votaciones</h1>
		    </div>
	    </div>
	</header>
	<section>
		<div class="container">
			<div class="row">
				<div class="span2">
					
				</div>
				<div class="span8">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Cedula</th>
								<th>Nombre</th>
								<th>#Votos</th>
							</tr>
						</thead>
						<tbody>
							<?php
                                require_once('funciones.php');
                                $bus = new funciones();
                                $bus->resultados();
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<h1><strong> Total Votos:</strong></h1> 
					<h1 class="well"><?php 
                          $bus->total();
					    ?>
					</h1>
				</div>
				<div class="span1">
				</div>
				<div class="span8">
					  <img src="grafico.php" />
				</div>
			</div>
		</div>
		
	</section>
	 <div class="container">
	 	<footer class="well">
		    <strong> Certificado y Evaluado: </strong> Aprendiz Sena - Erika Johanna Ortega
	    </footer>
	 </div>
</body>
</html>