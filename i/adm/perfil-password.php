<?php
session_start();
if($_SESSION['estado']=="Admin"){ 

    $_SESSION['action'] =  "actualizaPassword";
    
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
    <?php
    include '/templates/navbar.php';
    ?>
    <!--Inicio contenido perfil-->
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-2"></div>

            <div class="col-sm-8">
                <h1 style="text-align:center;">Administrador</h1>
                <br />
            </div>
            <div class="col-sm-2"></div>
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


                <ul class="list-group">
                    <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Compartido</strong></span>
                        125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Preguntas</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Seguidores</strong></span>
                        78</li>
                </ul>

                <div class="panel panel-default">
                    <div class="panel-heading">Redes Sociales</div>
                    <div class="panel-body mt-2">
                        <i class="fab fa-facebook-f fa-lg ml-2"></i> <i class="fab fa-github fa-lg ml-2"></i> <i class="fab fa-twitter fa-lg ml-2"></i>
                        <i class="fab fa-pinterest fa-lg ml-2"></i> <i class="fab fa-google-plus fa-lg ml-2"></i>
                    </div>
                </div>

            </div>
            <!--/col-3-->
            <div class="col-sm-9">

                <div class="tab-content ">
                    <div class="tab-pane active " id="home">
                        <hr>
                        <form id="form-password-admin" class="form shadow p-3 mb-5 bg-white rounded">
                            
                            <div class="form-group">
                            
                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Contraseña actual</h4>
                                    </label>
                                    <input id="ctlPassword" type="password" class="form-control" name="ctlPassword"  placeholder="password" title="Ingrese su contraseña">
                                    <div id="feed-password" class="form-control-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
    
                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Nueva contraseña</h4>
                                    </label>
                                    <input id="ctlNewPassword" type="password" class="form-control" name="ctlNewPassword"  placeholder="Ingrese su nueva contraseña"
                                        title="enter your password.">
                                        <div id="feed-newPassword" class="form-control-feedback">
                                        </div>
                                </div>
                            </div>
                            <div class="form-group">
    
                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Confirmar contraseña</h4>
                                    </label>
                                    <input id="ctlNewPasswordConfirm" type="password" class="form-control" name="newPasswordConfirm" placeholder="Reingrese su nueva contraseña"
                                        title="enter your password2.">
                                        <div id="feed-newPasswordConfirm" class="form-control-feedback">
                                        </div>
                                </div>
                            </div>
                                        

                            
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button id="btn-sender" class="btn btn-lg btn-success" type="submit"><i class="fas fa-sync-alt"></i>
                                        Actualizar</button>

                                    <button id="btn-cancelarSender" class="btn btn-lg color-primario" type="submit">
                                        Cancelar</button>
                                </div>
                            </div>
                        </form>

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
        <!--==========================================================================-->
        <script src="/i/adm/control-pass-adm.js" type="module"></script>    
        <!--==========================================================================-->
        <?php
        if (isset($_GET['error'])) {
        ?>
        <script>
            toastr.error('Ha ocurrido un problema de comunicación. Intentelo más tarde.');
            console.log("Error al realizar la petición");
        </script> 
        <?php
        }else if(isset($_GET['errorMatch'])){
        ?>
        <script>
            document.getElementById('ctlPassword').focus();
            toastr.error('Error, debe ingresar correctamente su contraseña actual.');
            console.log("Error al realizar operación");
        </script>
        <?php
        }else if(isset($_GET['success'])){
        ?>
        <script>
            toastr.success('Sus datos se han actualizado correctamente!.');
            console.log("Actualización efectuada exitosamente");
            document.getElementById('ctlPassword').value = "";
            document.getElementById('ctlNewPassword').value = "";
            document.getElementById('ctlNewPasswordConfirm').value = "";
        </script>
        <?php        
        }
        ?>
        <h3>
        <?php echo $_SESSION['password'] ?>
        <?php echo $_SESSION['password'] ?>
        </h3>
        
</body>

</html>
<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>