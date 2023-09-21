
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../media/logo/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="busqueda.php">Busqueda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tracking.php">Tracking</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="reportes.php">Reportes</a></li>
            <li><a class="dropdown-item" href="operaciones.php">Operaciones</a></li>
            <li><a class="dropdown-item" href="vista_tecnica.php">Vista Tecnica</a></li>
            <li><a class="dropdown-item" href="mantenimiento.php">Mantenimiento</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="configuracion.php">Configuracion</a></li>
            <form action="../php/functions/logout.php" method="post">
              <li><a class="dropdown-item user-name" id="rol"><?php echo $rol ?></a></li>
                <input type="submit" value="Salir" name="logout" class="btn-menu">
              </form>
          </ul>
            <!-- DATO PARA HACER LA VALIDACION DE USUARIO -->
        
        </li>
       
        
    </div>
  </div>
</nav>