<!--
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #65C8DC;">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="layout/img/kimobill3.png" alt="" width="300" height="70" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item text-center">            
            <a class="navbar-brand active"  aria-current="page" href="panel.php">
                <label class="fas fa-home fa-1x" href="panel.php"></label> Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <label class="far fa-file-alt fa-1x"> </label> Crear
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item far fa-file-alt fa-1x" href="formulario.php"> Formularios de Encuestas</a></li>
          </ul>
        </li>
        <li class="nav-item">
         <a class="navbar-brand" href="#">
             <label class="fas fa-shipping-fast fa-1x"> </label>
             Distribución
         </a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#">
              <label class="fas fa-chart-bar fa-1x"> </label>
              Analisis
          </a>
        </li>       
      </ul>
        
    </div>
      <form class="d-flex"> 
          
          <a href="salir.php"class="btn btn-outline-danger fas fa-user-circle fa-2x" type="submit" onclick="salir();"></a>
    </form>
  </div>
</nav>-->

<!--========== NAV ==========-->
<div class="nav" id="navbar">
    <nav class="nav__container">
        <div>
            <a href="panel.php" class="nav__link nav__logo">                        
                <span class="nav__logo-name"><img src="layout/img/LOGO-KX-METRICS.png" width="250"></span>
            </a>

            <div class="nav__list">
                <div class="nav__items">
                    <!--                            <h3 class="nav__subtitle">Menu</h3>-->
                        <a href="panel.php" class="nav__link active">
                        <i class='bx bx-home nav__icon' ></i>
                        <span class="nav__name">Inicio</span>
                    </a>
                    <a href="panel.php" class="nav__link">
                        <i class='fas fa-tachometer-alt nav__icon' ></i>
                        <span class="nav__name">Indicadores de XP</span>
                    </a>
                    <a href="panel.php" class="nav__link">
                        <i class='fas fa-chart-bar nav__icon' ></i>
                        <span class="nav__name">Historicos</span>
                    </a>
                    <div class="nav__dropdown">
                        <a href="" class="nav__link">
                            <i class='far fa-file-alt fa-1 xl nav__icon' ></i>
                            <span class="nav__name">Encuestas</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="formulario.php" class="nav__dropdown-item"><i class='far fa-file-alt' ></i>  Creación</a>
                                <a href="encuestas.php" class="nav__dropdown-item"><i class='far fa-folder-open' ></i>  Existentes</a>
                                <a href="indicadores.php" class="nav__dropdown-item"><i class='fas fa-chart-bar' ></i>  Indicadores</a>
                            </div>
                        </div>

                    </div>                            
                    
                </div>                        

                <div class="nav__items">
                    <!--                            <h3 class="nav__subtitle">Profile</h3>-->
                    <a href="panel.php" class="nav__link">
                        <i class='bx bx-message-rounded nav__icon' ></i>
                        <span class="nav__name">Mensajes</span>
                    </a>

                    <div class="nav__dropdown">
                        <a href="" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__name">Notificaciones</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="#" class="nav__dropdown-item"><i class='bx bx-bell' ></i> Blocked</a>
                                <a href="#" class="nav__dropdown-item"><i class='bx bx-bell' ></i> Silenced</a>
                                <a href="#" class="nav__dropdown-item"><i class='bx bx-bell' ></i> Publish</a>
                                <a href="#" class="nav__dropdown-item"><i class='bx bx-bell' ></i> Program</a>
                            </div>
                        </div>

                    </div>

                </div>




            </div>
        </div>
        <div class="nav__logout">
            <div class="nav__dropdown">
                <a href="" class="nav__link">
                    <i class=' fas fa-street-view fa-1x  nav__icon' ></i>
                    <span class="nav__name">Usuario</span>
                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                </a>

                <div class="nav__dropdown-collapse">
                    <div class="nav__dropdown-content">
                        <a href="cambioclave.php" class="nav__dropdown-item"><i class='fas fa-key' ></i> Clave</a>
                        <a href="informacion.php" class="nav__dropdown-item"><i class='fas fa-user-edit' ></i> Información</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="salir.php" class="nav__link nav__logout">
            <i class='bx bx-log-out nav__icon' ></i>
            <span class="nav__name">Cerrar Sesion</span>
        </a>
    </nav>
</div>

