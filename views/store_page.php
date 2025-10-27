  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/store_page.css">
 

<?php
if(!isset($_GET['id'])) { echo "<p>Juego no seleccionado</p>"; exit; }
$idJuego = (int)$_GET['id'];

 $juego = $conex->query("
    SELECT v.*, i.url AS imagen_portada
    FROM videojuego v
    LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo='portada'
    WHERE v.idVideoJuego = $idJuego
")->fetch_assoc();
if(empty($juego['imagen_portada'])) $juego['imagen_portada'] = 'img/fondo/negro.jpg';


$video = $conex->query("
    SELECT url FROM video_juego WHERE idVideoJuego = $idJuego LIMIT 1
")->fetch_assoc();

$imagenes = [];
$resImg = $conex->query("SELECT url FROM imagenes_juego WHERE idVideoJuego = $idJuego AND tipo='galeria' ORDER BY orden");
while($row = $resImg->fetch_assoc()) $imagenes[] = $row['url'];
if(empty($imagenes)) $imagenes = [$juego['imagen_portada']];
?>

  <div class="body" >

<section class="hero" style="background-image: url('<?= htmlspecialchars($juego['imagen_portada']) ?>');">
    <div class="overlay"></div>
    <div class="hero-content text-center text-light">
        <h1 class="titulo"><?= htmlspecialchars($juego['nombreDelJuego']) ?></h1>
     </div>
</section>

<section class="container py-5 mt-5">
    <div class="mb-5">
        <div class="ratio ratio-16x9 shadow-lg border-video">
            <iframe src="<?= htmlspecialchars($video['url']) ?>" title="<?= htmlspecialchars($juego['nombreDelJuego']) ?> Trailer" allowfullscreen></iframe>
        </div>
    </div>

    <div id="carouselImages" class="carousel slide mb-5" data-bs-interval="false">
    <div class="carousel-inner">
        <?php
        $active = 'active';
         $grupos = array_chunk($imagenes, 3);

        foreach ($grupos as $grupo): ?>
            <div class="carousel-item <?= $active ?>">
                <div class="row g-2">
                    <?php foreach ($grupo as $img): ?>
                        <div class="col-md-4">
                            <img src="<?= htmlspecialchars($img) ?>" class="d-block w-100 rounded">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php $active = ''; endforeach; ?>
    </div>

    
</div>


</section>


<section class="container py-5 mt-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card bg-dark text-light h-100 p-4 shadow-lg">
                <h2 class="fw-bold text-danger mb-3"><?= htmlspecialchars($juego['nombreDelJuego']) ?></h2>
                <p><?= htmlspecialchars($juego['descripcion']) ?></p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-dark text-light h-100 p-4 shadow-lg d-flex flex-column justify-content-between">
                <div  class="d-flex align-items-center justify-content-between mb-4">
                <button class="btn btn-fav" id="btn-fav" type="button">
                  <i class="bi bi-heart"></i>
                </button>


                     <h3 class="text-white fw-bold mb-0"  id="precio">$<?= htmlspecialchars($juego['precio'])?></h3>
                </div>
                      
                <?php
                  $btnComprar = true; 
                  if (isset($_SESSION['IDusuario'])) {
                      $idUsuario = (int)$_SESSION['IDusuario'];
                      $idJuegoInt = (int)$idJuego;

                      $checkBiblioteca = $conex->query("
                          SELECT 1 FROM biblioteca 
                          WHERE IDusuario = $idUsuario AND idVideoJuego = $idJuegoInt
                          LIMIT 1
                      ");

                      if ($checkBiblioteca && $checkBiblioteca->num_rows > 0) {
                          $btnComprar = false; 
                      }
                  }
                  ?>

                <div class="d-flex flex-column gap-3">
                  
                <?php if($btnComprar): ?>
                  <a href="cart.php?add=<?= $idJuego ?>" 
                    class="btn btn-success fw-bold text-white text-center w-100">
                    Comprar
                  </a>

                  <a href="cart.php?add=<?= $idJuego ?>" 
                  class="btn btn-danger w-100 fw-bold"
                  onclick="alert('¡Juego agregado al carrito!');">
                  <i class="bi bi-cart-fill me-2"></i>Añadir al carrito
                </a>
              <?php else: ?>
                  <a href="library.php?>" 
                    class="btn btn-primary fw-bold text-white text-center w-100">
                    ya lo tienes disponible
                  </a>
              <?php endif; ?>

                
                </div>
            </div>
        </div>
    </div>
</section>



    
<?php include 'rating.php'; ?>  
<section class="container ratings mb-5">
  <h4 class="fw-bold text-uppercase mb-4" id="valoracion-jugadores">Valoraciones de jugadores</h4>
  <div class="rating-box p-4 shadow-lg rounded">
    <div class="d-flex mb-3">
      <h1 class="display-4 fw-bold text-warning mb-0 me-3"><?= $average ?></h1>
      <div>
        <div class="stars text-warning mb-1">
            <?php
            $fullStars = floor($average);
            $halfStar = ($average - $fullStars) >= 0.5 ? 1 : 0;
            echo str_repeat('★', $fullStars);
            if ($halfStar) echo '½';
            echo str_repeat('☆', 5 - $fullStars - $halfStar);
            ?>
        </div>
        <p class="text-secondary mb-0">Basado en <?= $totalRatings ?> reseñas</p>
      </div>
    </div>

    <?php
    $colors = [5 => 'bg-warning', 4 => 'bg-success', 3 => 'bg-info', 2 => 'bg-primary', 1 => 'bg-danger'];
    for ($i = 5; $i >= 1; $i--):
    ?>
      <div class="d-flex align-items-center mb-2">
        <span class="me-2"><?= $i ?>★</span>
        <div class="progress flex-grow-1">
          <div class="progress-bar <?= $colors[$i] ?>" style="width: <?= $percentages[$i] ?>%"></div>
        </div>
        <span class="ms-2"><?= $percentages[$i] ?>%</span>
      </div>
    <?php endfor; ?>
  </div>
</section>

    <section class=" container requirements mb-5 p-4 rounded shadow-lg">
      <h4 class="text-uppercase mb-4 fw-bold">Requisitos del sistema</h4>
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
          <h6 class="fw-bold text-decoration-underline mb-3">Mínimos</h6>
          <ul class="list-unstyled">
            <li><strong>SO:</strong> Windows 10 64-bit</li>
            <li><strong>Procesador:</strong> AMD Ryzen 3 1200 / Intel Core i5-7500</li>
            <li><strong>Memoria:</strong> 8 GB RAM</li>
            <li><strong>Gráficos:</strong> GTX 1050 Ti / RX 560</li>
            <li><strong>Almacenamiento:</strong> 55 GB disponibles</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h6 class="fw-bold text-decoration-underline mb-3">Recomendados</h6>
          <ul class="list-unstyled">
            <li><strong>SO:</strong> Windows 10/11 64-bit</li>
            <li><strong>Procesador:</strong> AMD Ryzen 5 3600 / Intel Core i7-8700</li>
            <li><strong>Memoria:</strong> 16 GB RAM</li>
            <li><strong>Gráficos:</strong> RTX 2060 / RX 5700</li>
            <li><strong>Almacenamiento:</strong> SSD con 55 GB libres</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container game-cards mb-5">
      <h4 class="text-uppercase mb-4 fw-bold text-center">Más juegos</h4>

      <div class="d-flex justify-content-center flex-wrap gap-4">
      <div class="contenedorTarjetasPrincipales1">
    <?php
       $query = "
        SELECT v.idVideoJuego, v.nombreDelJuego, v.precio, i.url AS imagen
        FROM videojuego v
        LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
        ORDER BY RAND()
        LIMIT 3
      ";
      $result = $conex->query($query);

      if ($result && $result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
          $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
    ?>
          <div class="card estiloDeTarjeta1">
            <a href="store_page.php?id=<?= $row['idVideoJuego'] ?>" style="text-decoration: none; color: white;"> 
              <img src="<?= $img ?>" class="card-img-top" alt="<?= htmlspecialchars($row['nombreDelJuego']) ?>">
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($row['nombreDelJuego']) ?></h5>
                <span class="precio-gamer">$<?= htmlspecialchars(number_format($row['precio'], 2)) ?> pesos</span>
              </div>
            </a>
          </div>
    <?php
        endwhile;
      else:
        echo "<p>No se encontraron juegos.</p>";
      endif;
    ?>
    </div>
      </div>
    </section>


<?php include 'coment.php'; ?>  

<?php if(isset($_SESSION['IDusuario'])): ?>
<div class="container review-container mb-5">
  <h3 class="review-title text-light">Deja tu comentario</h3>
  <form method="post" action="coment.php?id=<?= intval($_GET['id']) ?>">
    <div class="form-group mb-3">
      <textarea 
        name="comentario" 
        rows="4" 
        placeholder="Tu comentario..." 
        class="form-control bg-dark text-white border-secondary" 
        style="color: white; background-color: #222; border-radius: 10px; resize: none;"
        required
      ></textarea>
    </div>

    <div class="form-footer mt-2">
      <div class="stars mb-3">
        <?php for ($i = 5; $i >= 1; $i--): ?>
          <input type="radio" name="rating" id="star<?= $i ?>" value="<?= $i ?>">
          <label for="star<?= $i ?>">★</label>
        <?php endfor; ?>
      </div>
      <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
<?php else: ?>
  <p class="text-light">Debes <a href="login.php">iniciar sesión</a> para dejar un comentario.</p>
<?php endif; ?>

<section class="container reviews mb-5">
  <h4 class="text-uppercase mb-4 fw-bold">Opiniones de jugadores</h4>

  <?php if(mysqli_num_rows($opinionesQuery) === 0): ?>
    <p class="text-light">No hay comentarios todavía. ¡Sé el primero en opinar!</p>
  <?php endif; ?>

  <?php while($opinion = mysqli_fetch_assoc($opinionesQuery)): ?>
    <div class='review-card p-4 d-flex align-items-start justify-content-between'>
      <div class="d-flex">
        <img src='https://cdn-icons-png.flaticon.com/512/147/147144.png' class='avatar me-3'>
        <div>
          <h6 class='fw-bold mb-1'><?= htmlspecialchars($opinion['nombreDeUsuario']) ?></h6>
          <?php if($opinion['comentario']): ?>
            <p class='mb-1 text-light'><?= htmlspecialchars($opinion['comentario']) ?></p>
          <?php endif; ?>
          <?php if($opinion['rating'] !== NULL): ?>
            <span class='text-warning'>
              <?= str_repeat('★', $opinion['rating']) . str_repeat('☆', 5 - $opinion['rating']) ?>
            </span>
          <?php endif; ?>
          <br>
          <small class='text-white'><?= $opinion['fecha'] ?></small>
        </div>
      </div>

      <?php if (isset($_SESSION['IDusuario']) && $_SESSION['IDusuario'] == $opinion['IDusuario']): ?>
        <form method="post" action="coment.php?id=<?= intval($_GET['id']) ?>" 
              onsubmit="return confirm('¿Seguro que deseas eliminar este comentario?');" class="ms-3">
          <input type="hidden" name="delete_id" value="<?= $opinion['idOpinion'] ?>">
          <button type="submit" name="delete" class="btn btn-danger btn-sm">🗑️</button>
        </form>
      <?php endif; ?>
    </div>
  <?php endwhile; ?>
</section>







<script>
document.addEventListener('DOMContentLoaded', () => {
  const btnFav = document.getElementById('btn-fav');
  const icono = btnFav.querySelector('i');
  const id = Number(<?= $idJuego ?>);
  const nombre = "<?= addslashes($juego['nombreDelJuego']) ?>";
  const imagen = "<?= addslashes($juego['imagen_portada']) ?>";

  let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

  favoritos = favoritos.filter(j => j.id && j.nombre && j.imagen);

  const isFavorito = favoritos.some(f => Number(f.id) === id);
  if (isFavorito) {
    icono.classList.remove('bi-heart');
    icono.classList.add('bi-heart-fill');
    icono.style.color = 'yellow';
  }

  btnFav.addEventListener('click', () => {
    const index = favoritos.findIndex(f => Number(f.id) === id);
    if (index === -1) {
      favoritos.push({id, nombre, imagen});
      icono.classList.remove('bi-heart');
      icono.classList.add('bi-heart-fill');
      icono.style.color = 'yellow';
    } else {
      favoritos.splice(index, 1);
      icono.classList.remove('bi-heart-fill');
      icono.classList.add('bi-heart');
      icono.style.color = '';
    }
    localStorage.setItem('favoritos', JSON.stringify(favoritos));
  });
});
</script>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
