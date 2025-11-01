<!-- arranca el nav -->
<nav class="navbar navbar-expand-lg navbar-dark">
   <a href="index.php" class="pe-13">
    <img src="img/IconoSinBorde.png" alt="Logo" width="70" height="70" class="logo">
  </a>

   <div class="container-fluid d-flex justify-content-center align-items-center gap-3 p-132px conteNav d-none d-lg-flex" style="padding: 0 25px;">

    <div class="d-flex align-items-center gap-3 pe-13 contenedorNav">
       <span class="text-white item" style="cursor:pointer;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias">
        Categorías
      </span>
      <a href="library.php" class="text-white sinlinea item">Biblioteca</a>
      <a href="soportePrincipal.php" class="text-white sinlinea item">Soporte</a>
      <a href="about_us.php" class="text-white sinlinea item">8bit</a>
              <?php
        if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
            echo '<a href="Index_crud.php" class="text-white sinlinea item">Crud</a>';
        } else {
            echo '<a href="admin.php" class="text-white sinlinea item">¿Querés ser admin?</a>';
        }
        ?>



       
    </div>

    <div class="search-box">
    
      <form method="GET" action="seach.php">
        <input type="text" name="q" id="srch" placeholder="Search" required>
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <div class="item">
      <a href="perfilUsuario.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person iconologin" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1
          1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516
          10.68 10.289 10 8 10s-3.516.68-4.168
          1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
      </a>
      <span class="text-white"><?php echo $_SESSION['nombreDeUsuario']; ?> </span>
    </div>

    <a href="cart.php" style="color:white" class="item">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1
        .485.379L2.89 3H14.5a.5.5 0 0 1
        .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415
        11H13a.5.5 0 0 1 0 1H4a.5.5 0
        0 1-.491-.408L2.01 3.607
        1.61 2H.5a.5.5 0 0
        1-.5-.5M3.102 4l.84
        4.479 9.144-.459L13.89
        4zM5 12a2 2 0 1 0 0 4
        2 2 0 0 0 0-4m7 0a2 2 0
        1 0 0 4 2 2 0 0 0 0-4m-7
        1a1 1 0 1 1 0 2 1 1 0 0
        1 0-2m7 0a1 1 0 1 1 0 2
        1 1 0 0 1 0-2"/>
      </svg>
    </a>
  </div>

   <button class="navbar-toggler d-lg-none ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCategorias" aria-controls="offcanvasCategorias" aria-label="Abrir menú">
  <span class="navbar-toggler-icon"></span>
</button>

</nav>

<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasCategorias" aria-labelledby="offcanvasCategoriasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasCategoriasLabel">Usuario</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
  </div>

  <div class="offcanvas-body">
    <div class="d-flex align-items-center mb-3">
      <a href="perfilUsuario.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person iconologin" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1
            1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516
            10.68 10.289 10 8 10s-3.516.68-4.168
            1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg>
        </a>
        <span class="text-white"><?php echo $_SESSION['nombreDeUsuario']; ?> </span>

        
        
    </div>
     
    <div class="d-flex flex-column gap-2 mb-3">
      <a href="soportePrincipal.php" class="btn btn-outline-light">Soporte</a>
      <a href="logout.php" class="btn btn-outline-light">Cerrar sesión</a>
    </div>

    <hr>
    <h5>Carrito de compras</h5>
    <a href="cart.php " style="color:white" class="item">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1
        .485.379L2.89 3H14.5a.5.5 0 0 1
        .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415
        11H13a.5.5 0 0 1 0 1H4a.5.5 0
        0 1-.491-.408L2.01 3.607
        1.61 2H.5a.5.5 0 0
        1-.5-.5M3.102 4l.84
        4.479 9.144-.459L13.89
        4zM5 12a2 2 0 1 0 0 4
        2 2 0 0 0 0-4m7 0a2 2 0
        1 0 0 4 2 2 0 0 0 0-4m-7
        1a1 1 0 1 1 0 2 1 1 0 0
        1 0-2m7 0a1 1 0 1 1 0 2
        1 1 0 0 1 0-2"/>
      </svg>
    </a>
    <hr>
    <h5 class="offcanvas-title">Categorías</h5>
    <ul class="list-unstyled mt-3">
    <li><a class="dropdown-item text-light" href="gender_page.php?id=aventura">Aventura</a></li>
      <li><a class="dropdown-item text-light" href="gender_page.php?id=accion">Acción</a></li>
      <li><a class="dropdown-item text-light" href="gender_page.php?id=combate">combate</a></li>
      <li><a class="dropdown-item text-light" href="gender_page.php?id=disparos">disparos</a></li>
      <li><a class="dropdown-item text-light" href="gender_page.php?id=deportes">Deportes</a></li>
       <li><a class="dropdown-item text-light" href="gender_page.php?id=carreras">Carreras</a></li>
     </ul>
     <hr>
     <a href="soportePrincipal.php" class="text-white sinlinea item">Soporte</a>
     <br>
     <a href="about_us.php" class="text-white sinlinea item">8bit</a>
     <br>
     <a href="library.php" class="text-white sinlinea item">Biblioteca</a>
     <br>
     <?php
        if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') {
            echo '<a href="Index_crud.php" class="text-white sinlinea item">Crud</a>';
        } else {
            echo '<a href="admin.php" class="text-white sinlinea item">¿Querés ser admin?</a>';
        }
        ?>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>