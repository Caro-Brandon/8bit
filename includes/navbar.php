
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8bit</title>
    <link rel="shortcut icon" href="/src/img/IconoSinBorde.png" type="image/x-icon" >
    <link rel="stylesheet" href="../css/navbar.css">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header> 
<!-- arranca el nav -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid justify-content-center d-flex align-items-center gap-3">

    <a href="home.php">
      <img src="../img/IconoSinBorde.png" alt="Logo" width="70" height="70" class="logo">
    </a>

    <div class="d-none d-lg-flex align-items-center gap-3">
      <a href="index.html" class="text-white sinlinea">Soporte</a>
      <a href="../logout.php" class="text-white sinlinea">Cerrar sesión</a>
      <span class="text-white" style="cursor:pointer;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias">
        Categorías
      </span>
      <a href="perfilUsuario">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person iconologin" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
      </svg>
     </a>
      <span class="text-white"><?php echo $_SESSION['nombreDeUsuario']; ?></span>
    </div>

    <button class="btn btn-outline-light d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias">
      Abrir
    </button>

  </div>
</nav>

<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasCategorias" aria-labelledby="offcanvasCategoriasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasCategoriasLabel">Usuario</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
  </div>
  <div class="offcanvas-body">

    <div class="d-flex align-items-center mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person me-2" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
      </svg>
      <span class="text-white"><?php echo $_SESSION['nombreDeUsuario']; ?></span>
    </div>

    <div class="d-flex flex-column gap-2 mb-3">
      <a href="index.html" class="btn btn-outline-light">Soporte</a>
      <a href="../logout.php" class="btn btn-outline-light">Cerrar sesión</a>
    </div>

    <hr>
    <h5 class="offcanvas-title" id="offcanvasCategoriasLabel">Categorías</h5>
    <ul class="list-unstyled mt-3">
      <li><a class="dropdown-item text-light" href="login.php">Aventura</a></li>
      <li><a class="dropdown-item text-light" href="#">Acción</a></li>
      <li><a class="dropdown-item text-light" href="#">Estrategia</a></li>
      <li><a class="dropdown-item text-light" href="#">Rol (RPG)</a></li>
      <li><a class="dropdown-item text-light" href="#">Deportes</a></li>
      <li><a class="dropdown-item text-light" href="#">Puzzle</a></li>
      <li><a class="dropdown-item text-light" href="#">Mini Juegos</a></li>
      <li><a class="dropdown-item text-light" href="#">Carreras</a></li>
     
    </ul>
  </div>
</div>


    </header> 
    </body>
    </html>



