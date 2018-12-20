<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['estado']=="Admin"){ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    //Incluyendo imports de CSS
    include '/templates/import-css.php'; 
    
    ?>
    <link rel="stylesheet" href="/css/mantenedores.css" />
    <title>Home de administrador - YCourses</title>
</head>

<body>
    <!--IMPORTANDO NAVBAR-->
    <?php include "/templates/navbar.php" ?>
    
    <!--IMPORTANDO SIDEBAR-WRAPPER -->
    <?php include "/templates/sidebar.php" ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid manten-alumno">
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i id="icon-btn" class="fas fa-chevron-circle-right"></i></a>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h1 class="mb-3" style="">Sección alumnos</h1>
                        <!--Para buscar alumno-->
                        <form id="alumno-searcher">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ingrese nombre o rut de alumno" aria-label="Ingrese nombre o rut de alumno" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                                </div>
                            </div>
                        </form>
                        <hr class="mt-5 mb-5">
                        <h3 class="mb-3" style="text-align:left; color:gray;">Crear Alumno</h3>
                        <form id="alumno-creater">
                                <div class="form-row mb-2">
                                    <div class="col">
                                    <label for="ctlRut">Nombre*</label>
                                    <input type="text" class="form-control gup" placeholder="Nombre">
                                    </div>
                                    <div class="col">
                                    <label for="ctlRut">Apellidos*</label>
                                    <input type="text" class="form-control gup" placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ctlRut">RUT</label>
                                    <input id="ctlRut" type="text" class="form-control gup"  placeholder="22.345.111-K">
                                </div>
                                <div class="form-group">
                                    <label for="ctlEmail">Email*</label>
                                    <input id="ctlEmail" type="email" class="form-control gup" placeholder="su@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="ctlPassword">Contraseña*</label>
                                    <input id="ctlPassword" type="password" class="form-control gup">
                                </div>
                                <div class="form-row mb-2">
                                    
                                    <div class="col">
                                    <label for="ctlRut">Contacto #1</label>
                                    <input type="text" class="form-control gup" placeholder="(+569) 87267121">
                                    </div>
                                    <div class="col">
                                    <label for="ctlRut">Contacto #2</label>
                                    <input type="text" class="form-control gup" placeholder="(+569) 87267121">
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                    <label for="ctlRut">Genero</label>
                                    <select id="ctlGenero" name="genero" class="form-control gup" >
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    </div>
                                    <div class="col">
                                    <label for="ctlRut">Fecha nacimiento</label>
                                    <input type="date" class="form-control gup" placeholder="Apellidos">
                                    </div>
                                    <div class="col">
                                    <label for="ctlRut">Ciudad</label>
                                    <?php include "/templates/ciudad.html" ?>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <?php
    //Incliendo Imports JS  
    include '/templates/import-js.php'; 
    ?>
    <script>

        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            if ($("#icon-btn").hasClass("fa-chevron-circle-right")) {
                $("#icon-btn").removeClass("fa-chevron-circle-right");
                $("#icon-btn").addClass("fa-chevron-circle-left");
            }else{
                $("#icon-btn").removeClass("fa-chevron-circle-left");
                $("#icon-btn").addClass("fa-chevron-circle-right");
            }
            
        });

    </script>
</body>

</html>
<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>