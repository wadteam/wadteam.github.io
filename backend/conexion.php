<?php
/************************************************************ */
/*                    VARIABLES DE CONEXION                  */
/********************************************************** */
/*
$server ="localhost";
$usuario ="root";
$password ="";
$basedatos = "bd_ycourses";
*/
/************************************************************ */
/*                    CONEXION A BD                          */
/********************************************************** */
    define("SERV_NAME","localhost");
	define("SERV_USER","root");
	define("SERV_PWD","");
	define("BD_NAME","bd_ycourses");
	
	//Funcion de conexion
	function Conecta(){
		$enlace =mysqli_connect(SERV_NAME,SERV_USER,SERV_PWD,BD_NAME);
		return $enlace; 
	}


    /*
    $conexion = mysqli_connect($server,$usuario, $password) or die ("<strong>No se ha podido establecer la conexión con el servidor</strong>");
    mysqli_set_charset($conexion, "utf8");
    /* SELECCIONANDO BD 
    $bd = mysqli_select_db($conexion,$basedatos) or die ("<strong>No se ha podido establecer la conexión con el servidor</strong>");
    return $bd;
    */


?>