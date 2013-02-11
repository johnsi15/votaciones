<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Votaciones</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/actualizarVotos.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	 <div class="container">
	 	<hr>
	 	<div class="hero-unit">
	 		<div class="page header">
	 			<h1>CANDIDATOS ELECCIÓN DEL COMITÉ PARITARIO 2013</h1>
	 		</div>
	 	</div>
	 	<div class="mensaje"></div>
	 	 <div class="row">
	 	 	<div id="cleber" class="span4">
	 	 		<form  action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/CLEBER.jpg" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Cleber Enrique Rangel
	 				  </label>
	 				   <input type="hidden" name="cleber" value="13469234"/> 
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 			</form>
	 	 	</div>
	 	 	<div id="cesarC" class="span4">
	 	 		 <form action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/CESAR C.jpg" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Cesar Castellano
	 				  </label>
	 				  <input type="hidden" name="cesarC" value="88197201"/>
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 		    </form>
	 	 	</div>
	 	 	<div id="richar" class="span4">
	 	 		<form action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/RICHAR.png" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Richar Perez Rozo
	 				  </label>
	 				  <input type="hidden" name="richar" value="1090366553"/>
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 		    </form>
	 	 	</div>
	 	 </div>
	    <hr>
	    <div class="row"> <!--Segundo fila de candidatos..... -->
	    	<div id="nelson" class="span4">
	 	    	<form action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/NELSON.jpg" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Nelson Sanchez
	 				  </label>
	 				  <input type="hidden" name="nelson" value="1098644600"/>
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 			</form>
	 	    </div>
	 	    <div id="cesarL" class="span4">
	 	    	<form action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/CESAR LAVERDE.png" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Cesar Laverde
	 				  </label>
	 				  <input type="hidden" name="cesarL" value="88224010"/>
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 			</form>
	 	    </div>
	 	    <div id="fabio" class="span4">
	 	    	<form action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/FABIO NIETO.jpg" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Fabio Nieto
	 				  </label>
	 				  <input type="hidden" name="fabio" value="88192887"/>
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 			</form>
	 	    </div>
	    </div>
	    <hr>
	    <div class="row">
	    	<div id="jesus" class="span4">
	 	    	<form action="acciones.php" method="post" class="well">
	 				  <label for="">
	 				  	<img src="img/JESUS RODOLFO.jpg" alt="" class="img-polaroid">
	 				  </label>
	 				  <label>
	 				  	 <strong> Nombre: </strong>Jesus Rodolfo
	 				  </label>
	 				  <input type="hidden" name="jesus" value="88215275"/>
	 				  <button type="submit" class="btn btn-success btn-large">Votar</button>
	 			</form>
	 	    </div>
	    </div>
	       <footer class="well">
	       	<div class="span4">
	       		<label for="">
	       			<strong>   Salud Ocupacional  </strong>
	       		</label>
	       	</div>
	       	<div class="span4">
	       		<strong>Plasticos Formosa</strong>
	       	</div>
	        	<div id="pie">
	        		<strong> <i class="icon-globe"></i> Departamento de Sistemas</strong>
	        	</div>
	      </footer>
	 </div>
</body>
</html>