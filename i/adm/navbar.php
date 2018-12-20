
    <nav id="nav-principal" class="navbar navbar-expand-lg navbar-light bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a id="ic-collapse" class="navbar-brand" href="#">
                <span class="brand-capital">y</span><span class="brand-normal">courses</span>
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/i/adm/home.php">Panel administración<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/i/adm/perfil.php">Perfil (<?php echo $_SESSION['nombre']?>)</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="/backend/cerrar-sesion-php">
                    <i id="ic-user" class="fas fa-sign-out-alt"></i>
                </a>
                <span class="icon-social" style="width:30px;">
                </span>
                <!--
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    -->
            </form>
        </div>

    </nav>