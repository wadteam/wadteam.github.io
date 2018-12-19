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
                <h1>Mantendor para Empresas</h1>
                
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