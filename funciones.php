<?php

   class funciones{
   	  private $db;

   	  function __construct(){
   	  	 require_once('conexion.php');
   	  	 $db = new conexion();
   	  	 $db->conectar();
   	  }

   	  public function registrarVotos($codigo){
   	  	 $resultado = mysql_query("SELECT * FROM candidatos WHERE id='$codigo'");
   	     $fila = mysql_fetch_array($resultado);
   	  	 	 $cantidad = $fila['canVotos'];
   	  	 	 $cantidad++;
   	  	
   	  	 $result = mysql_query("UPDATE candidatos SET canVotos='$cantidad' 
   	  	 	                     WHERE id='$codigo'");
   	  	 echo "Correcto";
   	  }

        public function resultados(){
             $resultado = mysql_query("SELECT * FROM candidatos ORDER BY canVotos DESC");
             while($fila = mysql_fetch_array($resultado)){
                      $salida = '<tr cant="'.$fila['canVotos'].'">
                                   <td>'.$fila['id'].'</td>
                                   <td>'.$fila['nombre'].'</td>
                                   <td><h4><strong>'.$fila['canVotos'].'</strong></h4></td>
                                </tr>';
                             echo $salida;
             }
        }

        public function total(){
            $resultado = mysql_query("SELECT SUM(canVotos) AS total FROM candidatos");
            $count=mysql_fetch_array($resultado);
            echo $count['total'];
        }

        public function canVotosGrafico(){
             $resultado = mysql_query("SELECT * FROM candidatos");
             while($fila = mysql_fetch_assoc($resultado)){
                    $this->votos[] = $fila; 
             }
             return $this->votos;
        }
   }///cierre del class
?>