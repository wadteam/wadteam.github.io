<?php
session_start();
if($_SESSION['estado']=="Relator"){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Funcionario - YCourses</title>
    <?php
    include '/templates/import-css.html';
    ?>
</head>
<body>
    <?php
    include '/templates/navbar.html';
    ?>
</body>
</html>
<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>