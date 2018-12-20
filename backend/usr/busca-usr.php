<?php
session_start();
include("../conexion.php");

if($_POST){
    $value = $_POST['palabra'];
    $query = "
    SELECT * 
    FROM alumno 
    WHERE CONCAT(nombre, ' ', apellidos) LIKE '%".$value."%'
    ORDER BY nombre"; 
    $sql_response=mysqli_query(Conecta(),$query);


while($row=mysqli_fetch_assoc($sql_response)){
	$idalumno = $row['idalumno'];
    $rut = $row['rut'];
    $nombre = $row['nombre'];
    $apellidos = $row['apellidos'];
    $genero = $row['genero'];
    $email = $row['email'];
    $password = $row['password'];
    $idCiudad = $row['id_ciudad'];
    $foto = $row['imagen_perfil'];
    $row['modo']="cargar";
?>
<a href="mantenedor.php?id=<?php echo @$idalumno; ?>" style="text-decoration:none;" >
<div onclick="" class="div_encontrado" align="left">
<div onclick="" style="margin-right:6px;"><b><?php echo $nombre." ".$apellidos; ?></b></div>
<div style="margin-right:6px; font-size:12px;" class="div_detalle"><?php echo "Perfil: <strong>".$rut; ?></strong></div></div>
</a>

<?php
    }
}else{
    //no post
}
?>