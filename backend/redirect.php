<?php
session_start();

/*
if($_SESSION['estado']=="Admin"){
    header("Location: /i/adm/home.php");
}else if($_SESSION['estado']=="Alumno"){
    header("Location: /i/usr/home.php");
}else if($_SESSION['estado']=="Relator"){
    header("Location: /i/fnc/home.php");  
} 
*/

switch ($_SESSION['estado']){
    case "Admin":
    header("Location: /i/adm/home.php");
        break;
    case "Alumno":
    header("Location: /i/usr/home.php");
        break;
    case "Relator":
    header("Location: /i/fnc/home.php");  
        break;
    case "Inactivo":
    header("Location: error-ingreso.html");  
        break;
}

?>