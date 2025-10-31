 
 <!-- home.php -->

    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Owl Carousel CSS (solo funcionalidad mínima, sin estilos adicionales) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">

    <!-- jQuery (requerido por Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

 
<?php
$result = $conex->query("
SELECT v.idVideoJuego, v.nombreDelJuego, v.descripcion, v.rutaJuego, i.url AS imagen
FROM videojuego v
LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
ORDER BY v.fechaDeLanzamiento ASC
LIMIT 3
");


$juegos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(empty($row['imagen'])) {
            $row['imagen'] = 'img/portada_default.jpg';
        }
        $juegos[] = $row;
    }
}


while(count($juegos) < 3) {
    $juegos[] = [
        'nombreDelJuego' => $juegos[0]['nombreDelJuego'],
        'descripcion' => $juegos[0]['descripcion'],
        'rutaJuego' => $juegos[0]['rutaJuego'],
        'imagen' => $juegos[0]['imagen']
    ];
}
?>

<!-- Carrusel con 3 slides -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach($juegos as $index => $juego): ?>
      <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
        <div class="promoCarousel<?php echo $index+1; ?>" 
             style="background-image: url('<?php echo htmlspecialchars($juego['imagen']); ?>');">
          <div class="promo-contenido-carousel">
            <div class="promo-texto-carousel">
              <h2><?php echo htmlspecialchars($juego['nombreDelJuego']); ?></h2>
              <p><?php echo htmlspecialchars($juego['descripcion']); ?></p>
              <a href="store_page.php?id=<?php echo $juego['idVideoJuego']; ?>" class="botonPromo">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
  </div>  
</div>

        <!-- termina la publicidad -->
           
   <!-- arranca el contenedor padre  -->
    <div id="contenedorPadre">
      
    
    <div class="Titulos">
      <h1>Más populares</h1>
    </div>

    <!-- contenedor de tarjetas -->
    <div class="contenedorTarjetasPrincipales1">
<?php
   $query = "
    SELECT v.idVideoJuego, v.nombreDelJuego, v.precio, i.url AS imagen, descripcion
    FROM videojuego v
    LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
    ORDER BY RAND()
    LIMIT 4
  ";
  $result = $conex->query($query);

  if ($result && $result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
      $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
?>
<div class="card estiloDeTarjeta1">
    <a href="store_page.php?id=<?= $row['idVideoJuego'] ?>" style="text-decoration: none; color: white;">
        <div class="img-flip">
            <img src="<?= $img ?>" class="front card-img-top" alt="<?= htmlspecialchars($row['nombreDelJuego']) ?>">
            <div class="back">
                <?php
                     $desc = htmlspecialchars($row['descripcion']);
                    $desc_cortada = implode(' ', array_slice(explode(' ', $desc), 0, 30)) . (str_word_count($desc) > 10 ? '...ver mas' : '');
                ?>
                <p><?= $desc_cortada ?></p>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($row['nombreDelJuego']) ?></h5>
            <span class="precio-gamer">$<?= htmlspecialchars(number_format($row['precio'], 0)) ?> pesos</span>
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


    

       <div  class="Titulos">
        <h1>Recomendados</h1>
      </div>

      <div class="contenedorTarjetas2 owl-carousel owl-theme">
      <?php
      $query = "
          SELECT v.idVideoJuego, v.nombreDelJuego, v.precio, i.url AS imagen
          FROM videojuego v
          LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
          ORDER BY RAND()
          LIMIT 10
      ";
      $result = $conex->query($query);

      if ($result && $result->num_rows > 0):
          while($row = $result->fetch_assoc()):
              $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
      ?>
          <div class="card bg-transparent estiloDeTarjeta2">
              <a href="store_page.php?id=<?= $row['idVideoJuego'] ?>" style="text-decoration: none; color: white;">
                  <img src="<?= $img ?>" class="card-img-top2" alt="<?= htmlspecialchars($row['nombreDelJuego']) ?>">
                  <div class="card-body">
                      <h5 class="card-title"><?= htmlspecialchars($row['nombreDelJuego']) ?></h5>
                      <span class="precio-gamer">$<?= htmlspecialchars(number_format($row['precio'], 0)) ?> USD</span>
                  </div>
              </a>
          </div>
      <?php
          endwhile;
      else:
          echo "<p>No hay juegos recomendados disponibles.</p>";
      endif;
      ?>
      </div>

      <style>
      .contenedorTarjetas2 .owl-nav button.owl-prev,
      .contenedorTarjetas2 .owl-nav button.owl-next {
          
          color: white;
          font-size: 2.5rem;  
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          z-index: 10;
          display: flex;
          align-items: center;
          justify-content: center;
      }

      .contenedorTarjetas2 .owl-nav button.owl-prev { 
        left: -35px;
      }
      .contenedorTarjetas2 .owl-nav button.owl-next { 
        right: -35px;
      }

      

      /* Ocultar texto predeterminado de Owl */
      .contenedorTarjetas2 .owl-nav button span { display: none; }
      </style>
      <script>
      $(document).ready(function(){
        $(".contenedorTarjetas2").owlCarousel({
          loop: false,          
          margin: 10,           
          nav: true,            
          navText: ["&#10094;", "&#10095;"],  
          dots: false,
          mouseDrag: true,
          touchDrag: true,
          center: false,
          stagePadding: 0,
          startPosition: 0,
          responsive:{
              0: { items: 1 },
              600: { items: 2 },
              1000: { items: 3 }, 
              1400:{ items: 4 }    
          }
        });
      });

      </script>
           
 <div class="promoUbisoft">
  <div class="promo-contenido">
    <div class="promo-texto">
      <h2>8bit Noticias</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Corporis explicabo maxime, officia quisquam pariatur ratione 
      modi asperiores voluptas dolorem.</p>
      <a href="noticias.php" class="botonPromo">Ir a noticias</a>
    </div>
  </div>
</div>
 
   
 
      <div  class="Titulos">
        <h1>Juegos que podrian gustarte</h1>
      </div>
       <!-- contenedor numero3 de las tarjetas -->
       <div class="contenedorTarjetasPrincipales3">
        <!--arranca los contenedores de tarjetas -->
        <?php
   $query = "
    SELECT v.idVideoJuego, v.nombreDelJuego, v.precio, i.url AS imagen, descripcion
    FROM videojuego v
    LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
    ORDER BY RAND()
    LIMIT 4
  ";
  $result = $conex->query($query);

  if ($result && $result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
      $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
?>
<div class="card estiloDeTarjeta1">
    <a href="store_page.php?id=<?= $row['idVideoJuego'] ?>" style="text-decoration: none; color: white;">
        <div class="img-flip">
            <img src="<?= $img ?>" class="front card-img-top" alt="<?= htmlspecialchars($row['nombreDelJuego']) ?>">
            <div class="back">
                <?php
                     $desc = htmlspecialchars($row['descripcion']);
                    $desc_cortada = implode(' ', array_slice(explode(' ', $desc), 0, 30)) . (str_word_count($desc) > 10 ? '...ver mas' : '');
                ?>
                <p><?= $desc_cortada ?></p>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($row['nombreDelJuego']) ?></h5>
            <span class="precio-gamer">$<?= htmlspecialchars(number_format($row['precio'], 0)) ?> pesos</span>
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

       <div  class="Titulos">
        <h1>Recomendados</h1>
      </div>

      <div class="contenedorTarjetas2 owl-carousel owl-theme">
      <?php
      $query = "
          SELECT v.idVideoJuego, v.nombreDelJuego, v.precio, i.url AS imagen
          FROM videojuego v
          LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
          ORDER BY RAND()
          LIMIT 10
      ";
      $result = $conex->query($query);

      if ($result && $result->num_rows > 0):
          while($row = $result->fetch_assoc()):
              $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
      ?>
          <div class="card bg-transparent estiloDeTarjeta2">
              <a href="store_page.php?id=<?= $row['idVideoJuego'] ?>" style="text-decoration: none; color: white;">
                  <img src="<?= $img ?>" class="card-img-top2" alt="<?= htmlspecialchars($row['nombreDelJuego']) ?>">
                  <div class="card-body">
                      <h5 class="card-title"><?= htmlspecialchars($row['nombreDelJuego']) ?></h5>
                      <span class="precio-gamer">$<?= htmlspecialchars(number_format($row['precio'], 0)) ?> USD</span>
                  </div>
              </a>
          </div>
      <?php
          endwhile;
      else:
          echo "<p>No hay juegos recomendados disponibles.</p>";
      endif;
      ?>
      </div>

      <style>
      .contenedorTarjetas2 .owl-nav button.owl-prev,
      .contenedorTarjetas2 .owl-nav button.owl-next {
          
          color: white;
          font-size: 2.5rem;  
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          z-index: 10;
          display: flex;
          align-items: center;
          justify-content: center;
      }

      .contenedorTarjetas2 .owl-nav button.owl-prev { 
        left: -35px;
      }
      .contenedorTarjetas2 .owl-nav button.owl-next { 
        right: -35px;
      }

      

      .contenedorTarjetas2 .owl-nav button span { display: none; }
      </style>
      <script>
      $(document).ready(function(){
        $(".contenedorTarjetas2").owlCarousel({
          loop: false,          
          margin: 10,           
          nav: true,            
          navText: ["&#10094;", "&#10095;"],  
          dots: false,
          mouseDrag: true,
          touchDrag: true,
          center: false,
          stagePadding: 0,
          startPosition: 0,
          responsive:{
              0: { items: 1 },
              600: { items: 2 },
              1000: { items: 3 }, 
              1400:{ items: 4 }    
          }
        });
      });

      </script>

  <!-- Promo -->
<div class="promoUbisoft">
  <div class="promo-contenido">
    <div class="promo-texto">
      <h2>8bit Connect</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Corporis explicabo maxime, officia quisquam pariatur ratione 
      modi asperiores voluptas dolorem.</p>
      <a href="#" class="botonPromo">Conectar a discord</a>
    </div>
  </div>
</div>
<!-- FIN PROMO -->


  <div class="Titulos">
      <h1>Géneros más jugados</h1>
  </div>

    <div class="contenedorTarjetasPrincipales1 d-flex flex-wrap justify-content-center gap-4">
    <?php
    $query = "
        SELECT DISTINCT genero, i.url AS imagen
        FROM videojuego v
        LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
        ORDER BY RAND()
        LIMIT 4
    ";
    $result = $conex->query($query);

    if ($result && $result->num_rows > 0):
        while($row = $result->fetch_assoc()):
            $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
    ?>
        <div class="card estiloDeTarjeta1">
            <a href="gender_page.php?id=<?= urlencode($row['genero']) ?>" style="text-decoration: none; color: white;">
                <div class="img-flip">
                    <img src="<?= $img ?>" class="front card-img-top" alt="<?= htmlspecialchars($row['genero']) ?>">
                    <div class="back">
                        <p>Explora juegos de <?= htmlspecialchars($row['genero']) ?></p>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($row['genero']) ?></h5>
                </div>
            </a>
        </div>
    <?php
        endwhile;
    else:
        echo "<p>No se encontraron géneros.</p>";
    endif;
    ?>
    </div>


           

        
         
    </div>
    
    <!-- termina el contenedor padre -->


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

