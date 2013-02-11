<?php
   class conexion{
   	  public function conectar(){
   	  	$host="190.254.119.107";
   	  	$user="jhon";
   	  	$pass="jhon";
   	  	$baseD="votaciones";
   	  	//conexion
   	  	$con=mysql_connect($host,$user,$pass) or die("Problemas en la conexion con la base de datos");
   	  	mysql_select_db($baseD) or die("Problemas con la conexion");
   	    return $con;
   	  }
   }
?>