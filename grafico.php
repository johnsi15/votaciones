<?php
	require_once('jpgraph/src/jpgraph.php');
	require_once('jpgraph/src/jpgraph_bar.php');
	require_once('funciones.php');
	$objeto = new funciones();
	$can = $objeto->canVotosGrafico();
	// Se define el array de datos
	//$datosy=array(25,16,24,5,8,31);
	$datosy=array();
	$total = count($can);///contamos lo obtenido y lo guardamos en la variable
	///cargamos el vector con los resultados.
	for($i = 0; $i<$total; $i++){
        $datosy[] = $can[$i]["canVotos"];
	}
	// Creamos el grafico
	$grafico = new Graph(500,250);
	$grafico->SetScale('textlin');
	// Configuracion de los titulos
	$grafico->title->Set('RESULTADOS VOTACIONES');
	$grafico->xaxis->title->Set('Nombre Candidatos');
	$grafico->yaxis->title->Set('Cantidad de Votos');
	// Ajustamos los margenes del grafico-----    (left,right,top,bottom)
	//$grafico->SetMargin(40,30,30,40);
	// Creamos barras de datos a partir del array de datos
	$bplot = new BarPlot($datosy);
	// Configuramos color de las barras
	$bplot->SetFillColor('#479CC9');
	///color en degradiente.
	$bplot->SetFillGradient('#567dd6','#fff7f7', GRAD_HOR);
	//el ancho de cada barra
	$bplot->SetWidth(35);
	//Añadimos barra de datos al grafico
	$grafico->Add($bplot);
	// Queremos mostrar el valor numerico de la barra
	$bplot->value->Show();
	
	//$grafico->title->SetFont(FF_FONT1,FS_BOLD);
	//$grafico->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
	//$grafico->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
	$grafico->xaxis->SetTickLabels(array('Cleber','Fabio','CesarC','Jesus','CesarL','Richar','Nelson'));
	// Se muestra el grafico
	$grafico->Stroke();
?>