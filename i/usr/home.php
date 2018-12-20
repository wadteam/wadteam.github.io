<?php
session_start();
if($_SESSION['estado']=="Alumno"){ 
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php include "/templates/import-css.html" ?>
    <!--   -->
    <title>Perfil del usuario - YCourses</title>
    <!--   -->
  </head>

  <body>
    <?php 
    include "/templates/navbar.php" 
    ?>
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
    

    <?php 
    include '/templates/import-js.html'; 
    ?>
    <!--===========================================================================-->
    
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