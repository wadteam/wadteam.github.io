<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['estado']=="Funcionario"){ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--==========================Haciendo uso de BS4================================-->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <!--==========================Fontawesome========================================-->
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <!--==========================Toastr.JS==========================================-->
    <link rel="stylesheet" href="/css/vendor/toastr.min.css">
    <!--========================Haciendo uso del CSS propio==========================-->
    <link rel="stylesheet" href="/css/principal.css">
    <!--========================Haciendo uso del CSS propio==========================-->
    <link rel="stylesheet" href="/css/custom_admin.css">
    <title>Perfil de administrador - YCourses</title>
</head>

<body>
    <?php 
    include '/templates/navbar.php';
    ?>


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
                </hr>
                <br>


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

                            <form class="form shadow p-3 mb-5 bg-white rounded" action="##" method="post" id="FormPerfil">
                                <div class="form-group ">
                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4 class="text-secondary">Nombre</h4>
                                        </label>
                                        <input id="ctlNombre" type="text" class="form-control" name="first_name"
                                            placeholder="Jeff Bezos" title="enter your first name if any.">
                                    </div>
                                    <div id="feed-nombre" class="form-control-feedback">

                                    </div>

                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4 class="text-secondary">Email</h4>
                                        </label>
                                        <input id="ctlEmail" type="email" class="form-control" name="email" placeholder="Jeff@Amazon.com"
                                            title="enter your email.">
                                        <div id="feed-email" class="form-control-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone">
                                            <h4 class="text-secondary">Contacto #1</h4>
                                        </label>
                                        <input id="ctlContactoSt" type="text" class="form-control" name="phone"
                                            placeholder="Ingrese su número de contacto" title="enter your phone number if any.">
                                        <div id="feed-contactoSt" class="form-control-feedback">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile">
                                            <h4 class="text-secondary">Contacto #2</h4>
                                        </label>
                                        <input id="ctlContactoNd" type="text" class="form-control" name="mobile"
                                            placeholder="Ingrese su número de contacto" title="enter your mobile number if any.">
                                        <div id="feed-contactoNd" class="form-control-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile">
                                            <h4 class="text-secondary">Fecha Nacimiento</h4>
                                        </label>
                                        <input id="ctlNacimiento" type="date" class="form-control" name="fecha nacimiento" placeholder="Ingrese su fecha de nacimiento"
                                            title="enter your mobile number if any.">
                                        <div id="feed-nacimiento" class="form-control-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile">
                                            <h4 class="text-secondary">Género</h4>
                                        </label>
                                        <select id="ctlGenero" class="form-control" name="ctlGender">
                                            <option value="">Masculino</option>
                                            <option value="">Femenino</option>
                                            <option value="">Otro</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4 class="text-secondary">Empresa</h4>
                                        </label>
                                        <input type="text" class="form-control disabled" id="ctlEmpresa" placeholder="Amazon Web Services, Inc."
                                            title="ingrese una empresa" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6 pt-5">
                                        <button id="servicio-sender"class="btn color-primario">
                                            Ver servicios
                                        </button>
                                    </div>
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
    <!--===========================================================================-->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/vendor/toastr.min.js"></script>
    <script src="/js/controles/control-perfil-adm.js" type="module"></script>
    <!--===========================================================================-->
    <script>
        $("#servicio-sender").click(function(e){
            e.preventDefault();
            
        });

        $(document).ready(function () {

            

            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function () {
                readURL(this);
            });
        });
    </script>
</body>

</html>

<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>