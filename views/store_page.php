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
                     <h3 class="text-white fw-bold mb-0"  id="precio">$<?= htmlspecialchars($juego['precio'])?></h3>
                </div>

                <div class="d-flex flex-column gap-3">
                <a href="cart.php?add=<?= $idJuego ?>" 
                  class="btn btn-success fw-bold text-white text-center w-100">
                  Comprar
                </a>

                <a href="cart.php?add=<?= $idJuego ?>" 
                  class="btn btn-danger w-100 fw-bold"
                  onclick="alert('¡Juego agregado al carrito!');">
                  <i class="bi bi-cart-fill me-2"></i>Añadir al carrito
                </a>
                </div>
            </div>
        </div>
    </div>
</section>



    

    <section class="container ratings mb-5">
      <h4 class="fw-bold text-uppercase mb-4" id="valoracion-jugadores">Valoraciones de jugadores</h4>
      <div class="rating-box p-4 shadow-lg rounded">
        <div class="d-flex mb-3">
          <h1 class="display-4 fw-bold text-warning mb-0 me-3">4.8</h1>
          <div>
            <div class="stars text-warning mb-1">★★★★★</div>
            <p class="text-secondary mb-0">Basado en 12,534 reseñas</p>
          </div>
        </div>

        <?php
        $ratings = [
          ['5★', 80, 'bg-warning'],
          ['4★', 15, 'bg-success'],
          ['3★', 3, 'bg-info'],
          ['2★', 1, 'bg-primary'],
          ['1★', 1, 'bg-danger']
        ];
        foreach ($ratings as [$star, $porc, $color]) {
          echo '<div class="d-flex align-items-center mb-2">
                  <span class="me-2">' . $star . '</span>
                  <div class="progress flex-grow-1">
                    <div class="progress-bar ' . $color . '" style="width:' . $porc . '%"></div>
                  </div>
                  <span class="ms-2">' . $porc . '%</span>
                </div>';
        }
        ?>
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
      <?php
      $juegos = [
        ['minecraft.jfif', 'Minecraft', '$47.999,00'],
        ['reddeadredemption2.jfif', 'Read Dead Redemption 2', '$63.999,00'],
        ['Cuphead.png', 'Cuphead', '$79.999,00'],
        ['gta V.jpg', 'Grand Theft Auto V', '$111.999,00'],
        ['rocket league.jpg', 'Rocket League', '$129.999,00'],
        ['Silksong.jfif', 'Hollow Night: Silksong', '$47.999,00'],
        ['Fall guys.jpg', 'Fall Guys', '$63.999,00'],
        ['FC26.avif', 'FC 26', '$79.999,00']
      ];
      ?>
      <div class="d-flex justify-content-center flex-wrap gap-4">
        <?php foreach ($juegos as [$img, $nombre, $precio]) : ?>
          <div class="card game-card shadow-lg">
            <img src="img/store_page/<?= $img ?>" class="card-img-top" alt="<?= $nombre ?>">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"><?= $nombre ?></h5>
              <p class="card-price"><?= $precio ?></p>
              <button class="btn btn-success fw-bold w-100">Consigue el juego</button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="container reviews mb-5">
      <h4 class="text-uppercase mb-4 fw-bold">Opiniones de jugadores</h4>
      <?php
      $opiniones = [
        ['https://cdn-icons-png.flaticon.com/512/147/147144.png', 'Carlos Martinez', 'Un remake espectacular...', '★★★★★'],
        ['https://cdn-icons-png.flaticon.com/512/145/145867.png', 'Luciano Garcia', 'La ambientación es increíble...', '★★★★☆'],
        ['https://cdn-icons-png.flaticon.com/512/145/145852.png', 'Andrea Rodriguez', 'Capcom volvió a superar...', '★★★★★'],
        ['https://cdn-icons-png.flaticon.com/512/147/147142.png', 'Sebastián Torres', 'Me encantó la jugabilidad...', '★★★★★'],
        ['https://cdn-icons-png.flaticon.com/512/147/147140.png', 'Diego Fernández', 'Los gráficos son impresionantes...', '★★★★☆'],
        ['https://cdn-icons-png.flaticon.com/512/147/147136.png', 'Mariana Lopez', 'No me gustó mucho...', '★★☆☆☆']
      ];
      foreach ($opiniones as [$avatar, $nombre, $texto, $stars]) {
        echo "
          <div class='review-card p-4 d-flex align-items-start'>
            <img src='$avatar' class='avatar me-3'>
            <div>
              <h6 class='fw-bold mb-1'>$nombre</h6>
              <p class='mb-1 text-light'>$texto</p>
              <span class='text-warning'>$stars</span>
            </div>
          </div>";
      }
      ?>
    </section>

    <div class="container review-container">
      <h3 class="review-title">Deja tu comentario</h3>
      <form id="commentForm" action="#" method="post">
        <div class="form-group">
          <input type="text" id="nombre" name="nombre" placeholder="Nombre *" required>
        </div>
        <div class="form-group">
          <input type="email" id="email" name="email" placeholder="Correo electrónico *" required>
        </div>
        <div class="form-group">
          <textarea id="comentario" name="comentario" rows="4" placeholder="Tu calificación *" required></textarea>
        </div>
        <div class="form-footer">
          <div class="stars">
            <?php for ($i = 5; $i >= 1; $i--): ?>
              <input type="radio" name="rating" id="star<?= $i ?>" value="<?= $i ?>"><label for="star<?= $i ?>">★</label>
            <?php endfor; ?>
          </div>
          <button type="submit" class="submit-btn">Entregar</button>
        </div>
      </form>
    </div>
  </section>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</div>
