<?php
session_start();
if($_SESSION['estado']=="Admin"){ 
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $nombre = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $_SESSION['action'] =  "actualizaDatos";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include '/templates/import-css.php'; 
    ?>
    <title>Perfil de administrador - YCourses</title>
</head>

<body>
    <?php include '/templates/navbar.php'; ?>

    <!--Inicio contenido perfil-->
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <h1 class="text-secondary text-center pt-3">Administrador</h1> 
                <br />
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->


                <div class="text-center">
                    <img src="/img/mrjeff.jpg" class="avatar img-circle img-thumbnail" alt="avatar" style="border-radius: 50%;">
                    <h6>Subir una imagen</h6>
                    <!--
                    <input type="file" class="text-center center-block file-upload">
                    -->
                </div>
                </hr><br>


                <div class="panel panel-default">
                    <div class="panel-heading">Sitio web <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://wadteam.github.io">wadteam.git</a></div>
                </div>


                <ul class="list-group pt-5">
                    <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right text-primario"><span class="pull-left"><strong>Compartido</strong></span>
                        125</li>
                    <li class="list-group-item text-right text-primario"><span class="pull-left"><strong>Likes</strong></span>
                        13</li>
                    <li class="list-group-item text-right text-primario"><span class="pull-left"><strong>Preguntas</strong></span>
                        37</li>
                    <li class="list-group-item text-right text-primario"><span class="pull-left"><strong>Seguidores</strong></span>
                        78</li>
                </ul>

                <div class="panel panel-default pt-5">
                    <div class="panel-heading">Redes Sociales</div>
                    <div class="panel-body mt-2">
                        <i class="fab fa-facebook-f fa-lg ml-2"></i> <i class="fab fa-github fa-lg ml-2"></i> <i class="fab fa-twitter fa-lg ml-2"></i>
                        <i class="fab fa-pinterest fa-lg ml-2"></i> <i class="fab fa-google-plus fa-lg ml-2"></i>
                    </div>
                </div>

            </div>
            <!--/col-3-->
            <div class="col-sm-9">

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr class="pt-5">

                        <div class="col-sm-10">

                            <form id="form-perfil-admin" class="form shadow p-3 mb-5 bg-white rounded">
                                <div class="form-group ">
                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4 class="text-secondary">Nombre</h4>
                                        </label>
                                        <input id="ctlNombre" type="text" class="form-control" name="nombre"
                                            placeholder="Jeff" title="Ingresa aquí tu nombre" value="<?php echo $nombre ?>">
                                    </div>
                                    <div id="feed-nombre" class="form-control-feedback">

                                    </div>

                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4 class="text-secondary">Apellidos</h4>
                                        </label>
                                        <input id="ctlApellidos" type="text" class="form-control" name="apellidos"
                                            placeholder="Bezos" title="Ingresa aquí tus apellidos" value="<?php echo $apellidos ?>">
                                    </div>
                                    <div id="feed-apellidos" class="form-control-feedback">

                                    </div>

                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4 class="text-secondary">Email</h4>
                                        </label>
                                        <input id="ctlEmail" type="email" class="form-control" name="email" placeholder="Jeff@Amazon.com"
                                            title="enter your email." value="<?php echo $email ?>"/>
                                        <div id="feed-email" class="form-control-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 pt-2">
                                        <button id="btn-pwSender"class="btn btn-info">
                                            Cambiar contraseña
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="form-group">

                        <div class="col-xs-10">
                            <br>
                            <button id="btn-profileSender" class="btn btn-lg color-primario" type="submit"><i class="fas fa-save"></i>
                                Guardar</button>
                            <button class="btn btn-lg" type="reset"><i class="fas fa-broom"></i>
                                Limpiar</button>
                        </div>

                    </div>

                    <hr>

                </div>

                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->
    <?php 
    include '/templates/import-js.php'; 
    ?>
    <!--===========================================================================-->
    <script src="/i/adm/control-perfil-adm.js" type="module"></script>
    <!--===========================================================================-->
    <?php
        if (isset($_GET['error'])) {
    ?>
        <script>
            toastr.error('Ha ocurrido un problema de comunicación. Intentelo más tarde.');
            console.log("Error al realizar la petición");
        </script>      
    <?php
        }else if(isset($_GET['success'])){
    ?>
        <script>
            toastr.success('Sus datos se han actualizado correctamente!.');
            console.log("Actualización efectuada exitosamente");
        </script>
    <?php        
        }
    ?>
</body>

</html>
<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>