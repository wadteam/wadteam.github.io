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
            <h1>Pagina principal</h1> 
      </div>
      <div class="container">
      <div class="col-xs-1" ></div>
      <div class="col-xs-10 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card text-center">
          <div class="card-header">
            Curso de javascript y html
          </div>
          <img class="card-img-top" src="" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso de JavaScript</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Suscribirse en el curso</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
      <div class="col-xs-1"></div>
      </div>
      
      <div class="container">
        <div class="col-xs-1" ></div>
        <div class="col-xs-10 shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card text-center">
            <div class="card-header">
              PHP
            </div>
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Curso de PHP</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Suscribirse en el curso</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>
        <div class="col-xs-1"></div>
        </div>
        
      <div class="container">
        <div class="col-xs-1" ></div>
        <div class="col-xs-10 shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card text-center">
            <div class="card-header">
              Hacking etico web
            </div>
            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Curso de Hacking Etico</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Suscribirse en el curso</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>
        <div class="col-xs-1"></div>
        </div>
     
    <!-- TERMINA CODIGO DEL PERFIL DEL CLIENTE -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/vendor/toastr.min.js"></script>
    <script src="/js/controles/control-perfil-adm.js" type="module"></script>

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