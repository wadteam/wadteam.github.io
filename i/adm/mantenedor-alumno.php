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
    <title>Home de administrador - YCourses</title>
</head>

<body>
    <!--IMPORTANDO NAVBAR-->
    <?php include "/templates/navbar.php" ?>
    
    <!--IMPORTANDO SIDEBAR-WRAPPER -->
    <?php include "/templates/sidebar.php" ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i id="icon-btn" class="fas fa-chevron-circle-right"></i></a>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <h1 class="mb-3 ">Sección alumnos</h1>
                        <!--Para buscar alumno-->
                        <form id="alumno-searcher">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ingrese nombre o rut de alumno" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                                </div>
                            </div>
                        </form>
                        <hr class="mt-5 mb-5">
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