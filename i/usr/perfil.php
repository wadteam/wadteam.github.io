<?php
session_start();
if($_SESSION['estado']=="alumno"){ 
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $nombre = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $_SESSION['action'] =  "actualizaDatos";
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--
      ==========================Haciendo uso de BS4================================
    -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css" />
    <!--
      ==========================Fontawesome========================================
    -->
    <link rel="stylesheet" href="/fontawesome/css/all.min.css" />
    <!--
      ==========================Toastr.JS==========================================
    -->
    <link rel="stylesheet" href="/css/vendor/toastr.min.css" />
    <!--
      ========================Haciendo uso del CSS propio==========================
    -->
    <link rel="stylesheet" href="/css/principal.css" />
    <!--
      ========================Haciendo uso del CSS propio==========================
    -->
    <link rel="stylesheet" href="/css/custom_admin.css" />
    <title>Perfil del usuario - YCourses</title>
  </head>

  <body>
    <nav
      id="nav-principal"
      class="navbar navbar-expand-lg navbar-light bg-white"
    >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a id="ic-collapse" class="navbar-brand" href="#">
          <span class="brand-capital">y</span
          ><span class="brand-normal">courses</span>
        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/i/usr/perfil.html"
              >Perfil<span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/i/usr/home.html">Servicios</a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="/i/usr/Certificados.html"
              >Mis Certificados</a
            >
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/i/usr/horario.html">Mi Horario</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="/index.html">
            <i id="ic-user" class="fas fa-sign-out-alt"></i>
          </a>
          <span class="icon-social" style="width:30px;"> </span>
          <!--
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          -->
        </form>
      </div>
    </nav>
    <!-- -TERMINO DE NAV -->
    <!-- COMIENZA CODIGO DEL CUERPO DEL PERFIL CLIENTE -->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->

   <!----> <div class="text-center">
    <h1>Perfil Personal</h1>              
</div>
<div class="text-center">
      <img src="/img/mona.jpg" alt="150" width="350" class="rounded-circle">
     
</div>

<div class="text-center">
    <input type="file" name="foto" id="">              
</div>
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->


<div class="container shadow-lg p-3 xs-5 bg-white rounded">

  <div class="col-xs-1"></div>
<div class="col-xs-10 col-md-10 col-sm-12">
  

      
    <div class="form-group col-xs-4">
      <label for="formGroupExampleInput">Nombre Completo</label>
      <input
        type="text"
        class="form-control"
        id="ctlnombre"
        value=""
        style="width: 50rem;"
        readonly="readonly";
      />
    </div>
    <div class="form-group col-xs-4 ">
      <label for="formGroupExampleInput2">Correo personal</label>
      <input
        type="text"
        class="form-control"
        id="ctlemail"
        value=""
        style="width: 50rem;"
        
      />
    </div>
    <div class="form-row">
          <div class="col-xs-4">
            <label for="validationTooltip01">Edad</label>
            <input type="text" class="form-control" id="ctledad" value="45" readonly="readonly";>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>

          <div class="col-xs-4 ">
                  <div>
                      <label>Genero
                      </label>
                      <select id="ctlGenero" class="form-control" name="ctlGender">
                          <option value="" selected></option>
                          <option value="">Femenino</option>
                          <option value="">Otro</option>

                      </select>
                  </div>
              </div>

         
      
          <div class="col-xs-4">
            <label for="validationTooltipUsername">Usuario</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="usuario">@</span>
              </div>
              <input type="text" class="form-control" id="ctlusuario" value="Laruda" aria-describedby="validationTooltipUsernamePrepend" readonly="readonly";>
              <div class="invalid-tooltip">
                
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-xs-4">
            <label for="validationTooltip03">Cantidad de cursos</label>
            <input type="text" class="form-control" id="validationTooltip03" value="3" readonly="readonly";>
            <div class="invalid-tooltip">
           
            </div>
          </div>
         <!--------------------------------------------->
    
          <div class="col-xs-4">
                  <div>
                      <label>Pais
                      </label>
                      <select id="Pais" class="form-control" name="Pais">
                          <option value="1" selected>Chile</option>

                      </select>
                  </div>
              </div>
          <!--------------------------->
         
          <div class="col-xs-4 ">
                  <div>
                      <label>Ciudad
                      </label>
                      <select id="Ciudad" class="form-control" name="Ciudad">
                          <option value="1" selected>Los Flaquitos</option>
                          <option value="2">Los Gorditos</option>
                          <option value="3">Los Palillos</option>

                      </select>
                  </div>
              </div>

              <div class="col-xs-4">
                <div>
                    <label>Estado Civil
                    </label>
                    <select id="Ciudad" class="form-control" name="Ciudad">
                        <option value="1" selected>Soltero</option>
                        <option value="2">Casado</option>
                        <option value="3">ay nose -u-</option>

                    </select>
                </div>
            </div>
          <!----------------------->
        </div>
          <!----------------------->
    
        
        
        <br>
        <button id="btn-profile" class="btn btn-primary col-xs-4 " type="submit" style="width : 20rem"  >Guardar</button>
        <button class="btn btn-danger col-xs-4" type="submit" style="width :20rem"  >Cancelar</button>
  </form>
</div>

<div class="col-xs-1"></div>

</div>
  

    <!-- TERMINA CODIGO DEL PERFIL DEL CLIENTE -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/vendor/toastr.min.js"></script>
    <script src="/i/usr/controles/control-perfil-usr.js" type="module"></script>
    <script>
      $("#profile").click(function(e){
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