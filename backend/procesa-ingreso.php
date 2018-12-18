<?php
include 'backend/conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];
//SENTENCIA SQL
$sql = 'SELECT * FROM admin WHERE email="'.$email.' password ='.$password.'"';

$content = mysqli_query(establecerConexion(),$sql);
$totalFilas = mysqli_num_rows($content);
$datos = mysqli_fetch_array($content);

if(totalFilas>0){
    session_start();
    /*OBTENIENDO VARIABLES DE SESIÓN */
    $_SESSION['id'] = $datos['idamin'];
    $_SESSION['email'] = $datos['email'];
    $_SESSION['password'] = $datos['password'];
    $_SESSION['nombre'] = $datos['nombre'];
    $_SESSION['apellidos'] = $datos['apellidos'];
    $_SESSION['estado'] = $datos['estado'];

    header("Location: redirect.php");

}else{

    header("Location: error.html");
}

?>