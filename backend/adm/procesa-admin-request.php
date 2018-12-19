<?php
session_start();
include "../conexion.php";
/********************************************** */
/*           Variables de Sesión               */
/**********************************************/

$id =  $_SESSION['id'];
$email =  $_SESSION['email'];
$password = $_SESSION['password'];
$nombre =  $_SESSION['nombre'];
$apellidos =  $_SESSION['apellidos'];
$action = $_SESSION['action'];

/********************************************** */
/*    Operadores lógicos de acción             */
/**********************************************/

switch($action){
    case "actualizaDatos":
        ActualizaDatos();
        break;
    case "actualizaPassword":
        ActualizaPassword();
        break;
}
 
/********************************************** */
/*    Métodos y funciones para ADMIN           */
/**********************************************/

function ActualizaDatos(){
    //Variables POST
    $nNombre = $_POST['nombre'];
    $nApellidos = $_POST['apellidos'];
    $nEmail = $_POST['email'];
    

    //SENTENCIAS SQL
    $queryUpdate =  'UPDATE admin SET nombre ="'.$nNombre.'", apellidos = "'.$nApellidos.'", email = "'.$nEmail.'" WHERE idadmin='.$_SESSION['id'].';';
    $content = mysqli_query(Conecta(),$queryUpdate);
    

    if ($content){
        $_SESSION['email'] = $nEmail;
        $_SESSION['nombre'] = $nNombre;
        $_SESSION['apellidos'] = $nApellidos;
        header('Location: /i/adm/perfil.php?success');
    }else{
        header('Location: /i/adm/perfil.php?error');
    }
}

function ActualizaPassword(){
    //Variables de sesión
    $nPassword=$_POST['ctlPassword'];
    $nPasswordReplace=$_POST['ctlNewPassword'];
    //query
    $queryPassword = 'UPDATE admin SET password ="'.$nPasswordReplace.'" WHERE idadmin = '.$_SESSION['id'].';';
    
    if($nPassword == $_SESSION['password']){
        //La contraseña ingresada con contraseña actual (vigente) coinciden
        $content = mysqli_query(Conecta(),$queryPassword);
        if($content){
            //Se ejecuta correctamente la query
            $_SESSION['password'] = $nPasswordReplace;
            header('Location: /i/adm/perfil-password.php?success');
        }else{
            //Error al ejecutar la query
            header('Location: /i/adm/perfil-password.php?error');
        }  
        
    }else{
        //No coincide la contraseña ingresada con contraseña actual (vigente)
        header('Location: /i/adm/perfil-password.php?errorMatch');
    }
}



?>