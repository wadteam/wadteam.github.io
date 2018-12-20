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
    <div class="text-center">
            <h1>Mi Horario</h1>              
      </div>
      <div class="container shadow-lg p-3 mb-5 bg-white rounded">
      
      
        <div class="col-xs-1 col-lg-1"></div>



      <div class="col-xs-10">
        <table class="table" >
          <thead class="thead-dark">
            <tr>
              <th class="bg-danger" scope="col">Horario</th>
              <th class="bg-danger" scope="col">Lunes</th>
              <th class="bg-danger" scope="col">Martes</th>
              <th class="bg-danger" scope="col">Miercoles</th>
              <th class="bg-danger" scope="col">Jueves</th>
              <th class="bg-danger" scope="col">Viernes</th>
              <th class="bg-danger" scope="col">Sabado</th>
              <th class="bg-danger" scope="col">Domingo</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th s cope="row">todo el dia</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">8:00 am</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row"> 9:45 am</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">11:15 am</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">14:00 pm</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">15:45 pm</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">17:00 pm</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">18:45 pm</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">20:30 pm</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">22:15 pm</th>
              <td></td>
              
            </tr>
            <tr>
              <th s cope="row">23:pm</th>
              <td></td>
              
            </tr>

            
          </tbody>
        </table>
      </div>  
      
      <div class="col-xs-1 col-lg-1"></div>

    <!-- TERMINA CODIGO DEL PERFIL DEL CLIENTE -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/vendor/toastr.min.js"></script>
    <script src="/js/controles/control-perfil-adm.js" type="module"></script>
  </body>
</html>
<?php 
}else{
	header("Location: ../../error-inesperado.html");
} 
?>