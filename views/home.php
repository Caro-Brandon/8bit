 
 <!-- home.php -->

     <!-- pongo esto pero luego el q lo lea lo cambia
      ya que cambie las rutas(le quito un ../ ya que los toma desde los controladores como x eje el index) -->
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Owl Carousel CSS (solo funcionalidad mínima, sin estilos adicionales) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">

    <!-- jQuery (requerido por Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

 
  <!--arranca la publicidad  -->
<!-- Carrusel con 3 slides -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  
   

  <!-- Contenido del carrusel -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="promoCarousel1">
      <div class="promo-contenido-carousel" >
           <div class="promo-texto-carousel">
            <h2>Counter-Strike 2</h2>
            <p>Juego shooter, no se qué más poner.</p>
            <a href="store_page.php" class="botonPromo">Ver más</a>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="promoCarousel2">
        <div class="promo-contenido-carousel">
          <div class="promo-texto-carousel">
            <h2>Hollow  Knigth</h2>
            <p>Juego aventura, no se qué más poner.</p>
            <a href="store_page.php" class="botonPromo">Ver más</a>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="promoCarousel3">
        <div class="promo-contenido-carousel">
          <div class="promo-texto-carousel">
            <h2>Resident Evil 4</h2>
            <p>Juego sdawdsadwa, no se qué más poner.</p>
            <a href="store_page.php" class="botonPromo">Ver más</a>
          </div>
        </div>
      </div>
    </div>

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
      
    
      <div  class="Titulos">
        <h1>Mas populares</h1>
      </div>
     <!--arranca los contenedores de tarjetas -->
       <div class="contenedorTarjetasPrincipales1">
        
        <div class="card estiloDeTarjeta1 ">
          <a href="store_page.php" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/GodOfWar.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="store_page.php" class="precio-gamer">$49.99 USD</a>
            </div>
          </a>
          </div>

          <div class="card  estiloDeTarjeta1 ">
            <a href="store_page.php" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/Halo1.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="store_page.php" class="precio-gamer">$49.99 USD</a>
          </div>
          </a>
          </div>

          <div class="card  estiloDeTarjeta1 ">
            <a href="store_page.php" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/Metro Exodus - Lucas Galan.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="store_page.php" class="precio-gamer">$49.99 USD</a> 
          </div>
          </a>
          </div>

          <div class="card estiloDeTarjeta1 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/GodOfWar.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="store_page.php" class="precio-gamer">$49.99 USD</a>
            </div>
          </a>
          </div>

       </div>

    

       <div  class="Titulos">
        <h1>Recomendados</h1>
      </div>

      <div class="contenedorTarjetas2 owl-carousel owl-theme">
     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
        <div class="card-body">
            <h5 class="card-title">Forza Horizon 5</h5>
            <a href="store_page.php" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Marvel_spiderman.jpg" class="card-img-top2" alt="Marvel Spiderman">
        <div class="card-body">
            <h5 class="card-title">Marvel Spiderman</h5>
            <a href="store_page.php" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/thelastofus.jpg" class="card-img-top2 god" alt="The Last of Us">
        <div class="card-body">
            <h5 class="card-title">The Last of Us</h5>
            <a href="store_page.php" class="precio-gamer">$49.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/gtav.jpg" class="card-img-top2" alt="GTA V">
        <div class="card-body">
            <h5 class="card-title">GTA V</h5>
            <a href="juegos/RedDeadRedemption2.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Cyberpunk2077.jpg" class="card-img-top2" alt="Cyberpunk 2077">
        <div class="card-body">
            <h5 class="card-title">Cyberpunk 2077</h5>
            <a href="src/juegos/Cyber/Cyberpunk2077.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
        <div class="card-body">
            <h5 class="card-title">Forza Horizon 5</h5>
            <a href="juegos/ForzaHorizon5.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Marvel_spiderman.jpg" class="card-img-top2" alt="Marvel Spiderman">
        <div class="card-body">
            <h5 class="card-title">Marvel Spiderman</h5>
            <a href="juegos/MarvelSpiderman.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/thelastofus.jpg" class="card-img-top2 god" alt="The Last of Us">
        <div class="card-body">
            <h5 class="card-title">The Last of Us</h5>
            <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/gtav.jpg" class="card-img-top2" alt="GTA V">
        <div class="card-body">
            <h5 class="card-title">GTA V</h5>
            <a href="juegos/RedDeadRedemption2.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Cyberpunk2077.jpg" class="card-img-top2" alt="Cyberpunk 2077">
        <div class="card-body">
            <h5 class="card-title">Cyberpunk 2077</h5>
            <a href="src/juegos/Cyber/Cyberpunk2077.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>
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
    navText: ["&#10094;", "&#10095;"], // Flechas grandes
    dots: false,
    mouseDrag: true,
    touchDrag: true,
    center: false,
    stagePadding: 0,
    startPosition: 0,
    responsive:{
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 4 },
        1400:{ items: 6 }    
    }
  });
});
</script>
  
 
      <div  class="Titulos">
        <h1>Sagas</h1>
      </div>
       <!-- contenedor numero3 de las tarjetas -->
       <div class="contenedorTarjetasPrincipales3">
        <!--arranca los contenedores de tarjetas -->
        <div class="card bg-transparent estiloDeTarjeta3 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/godofwarsaga.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God Of War</h5>
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;">
            <img src="img/juegos/saga2.jpeg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Assassin’s Creed</h5>
            </div>
            </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/halosaga.jpeg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Halo</h5>     
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/juegos/godofwarsaga.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God Of War</h5>
            </div>
          </a>
          </div>

       </div>

       <div  class="Titulos">
        <h1>Recomendados</h1>
      </div>

      <div class="contenedorTarjetas2 owl-carousel owl-theme">
     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
        <div class="card-body">
            <h5 class="card-title">Forza Horizon 5</h5>
            <a href="juegos/ForzaHorizon5.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Marvel_spiderman.jpg" class="card-img-top2" alt="Marvel Spiderman">
        <div class="card-body">
            <h5 class="card-title">Marvel Spiderman</h5>
            <a href="juegos/MarvelSpiderman.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/thelastofus.jpg" class="card-img-top2 god" alt="The Last of Us">
        <div class="card-body">
            <h5 class="card-title">The Last of Us</h5>
            <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/gtav.jpg" class="card-img-top2" alt="GTA V">
        <div class="card-body">
            <h5 class="card-title">GTA V</h5>
            <a href="juegos/RedDeadRedemption2.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Cyberpunk2077.jpg" class="card-img-top2" alt="Cyberpunk 2077">
        <div class="card-body">
            <h5 class="card-title">Cyberpunk 2077</h5>
            <a href="src/juegos/Cyber/Cyberpunk2077.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

     <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
        <div class="card-body">
            <h5 class="card-title">Forza Horizon 5</h5>
            <a href="juegos/ForzaHorizon5.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Marvel_spiderman.jpg" class="card-img-top2" alt="Marvel Spiderman">
        <div class="card-body">
            <h5 class="card-title">Marvel Spiderman</h5>
            <a href="juegos/MarvelSpiderman.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/thelastofus.jpg" class="card-img-top2 god" alt="The Last of Us">
        <div class="card-body">
            <h5 class="card-title">The Last of Us</h5>
            <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/gtav.jpg" class="card-img-top2" alt="GTA V">
        <div class="card-body">
            <h5 class="card-title">GTA V</h5>
            <a href="juegos/RedDeadRedemption2.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>

    <div class="card bg-transparent estiloDeTarjeta2">
        <img src="img/juegos/Cyberpunk2077.jpg" class="card-img-top2" alt="Cyberpunk 2077">
        <div class="card-body">
            <h5 class="card-title">Cyberpunk 2077</h5>
            <a href="src/juegos/Cyber/Cyberpunk2077.html" class="precio-gamer">$59.99 USD</a>
        </div>
    </div>
</div>

    <script>
    $(document).ready(function(){
      $(".contenedorTarjetas2").owlCarousel({
        loop: false,          
        margin: 10,           
        nav: true,            
        dots: false,
        mouseDrag: true,
        touchDrag: true,
        center: false,
        stagePadding: 0,
        startPosition: 0,
        responsive:{
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 4 },
            1400:{ items: 6 }    
        }
      });
    });
    </script>

  <!-- PROMO ESTILO UBISOFT -->
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


       <div  class="Titulos">
        <h1>Generos mas jugados</h1>
      </div>
       
      <!-- contenedor numero4 de las tarjetas -->
        
       <div class="contenedorTarjetasPrincipales3">
        <!--arranca los contenedores de tarjetas -->
        <div class="card bg-transparent estiloDeTarjeta3 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/generos/terror.jpg" class="card-img-top" alt="cambiar nombre"> 
             
            <div class="card-body">
              <h5 class="card-title">Terror</h5>
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;">
            <img src="img/generos/supervivencia.jpeg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Supervivencia</h5>
            </div>
            </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/generos/pelea.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Pelea</h5>     
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="img/generos/terror.jpg" class="card-img-top" alt="cambiar nombre"> 
             
            <div class="card-body">
              <h5 class="card-title">Terror</h5>
            </div>
          </a>
          </div>
            
       </div>

       <div class="contenedorTarjetasPrincipales3">
         <!-- div de color para la publicidad -->
         

        
         
    </div>
    <!-- termina el contenedor padre -->


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

