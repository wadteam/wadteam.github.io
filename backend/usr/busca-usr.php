<?php
session_start();
include("../conexion.php");

//$sql_response=mysqli_query(Conecta(),$query);

$output="";
$query = "SELECT * FROM alumno ORDER BY nombre";
$sqli = new mysqli("localhost","root","","bd_ycourses");

if (isset($_POST['palabra'])) {
    $q = $sqli -> real_escape_string($_POST['palabra']);
    $query = "SELECT al.idalumno, al.rut,al.nombre, al.apellidos, al.genero, al.email, al.password, al.estado,al.ciudad_idciudad, cd.nombre AS nombreciudad
    FROM alumno AS al
    INNER JOIN ciudad AS cd ON al.ciudad_idciudad = cd.idciudad
    WHERE CONCAT(al.nombre, ' ', al.apellidos) LIKE '%".$q."%';";

    $resultado = $sqli->query($query);
    if ($resultado->num_rows > 0) {
        
         
        while ($fila = $resultado->fetch_assoc()) {
            
            $idalumno = $fila['idalumno'];
            $rut =$fila['rut'];
            $nombre =$fila['nombre'];
            $apellidos =$fila['apellidos'];
            $genero =$fila['genero'];
            $email =$fila['email'];
            $estado =$fila['estado'];
            $nombreciudad =$fila['nombreciudad'];
            /*FIXME:Arreglar la id para ser mostrada por GET */
            $output.="
            <a href='#'mantenedor.php?id=idalumno' style='text-decoration:none;'>
                <div class='div_encontrado' align='left'>
                    <div style='margin-right:6px;'>
                        <b>".$nombre." ".$apellidos."</b>
                    </div>
                    <div style='margin-right:6px; font-size:12px;' class='div_detalle'> Contacto :<strong>".$email."</strong>
                    </div>
                </div>
            </a>
            ";
        }
        $output.="</tbody>";
    }else{
        $output.="No hay datos!";
    }
    //if
    echo $output;
    $sqli->close();
}
?>