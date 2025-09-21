<?php
session_start();

// Evitar caché del navegador
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!-- home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="../img/IconoSinBorde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
       <style>
          #cieloCometas {
            position: absolute; /* flota sobre el contenido */
            top: 0;
            left: 0;
            width: 100%;
            height: 200px;      /* zona superior visible */
            pointer-events: none;
            z-index: 999;
          }

          #cometas {
            width: 100%;
            height: 100%;
            pointer-events: none;
            background: transparent;
            display: block;
          }





      </style>
  </head>

<body>
     <!-- incluimos el nav -->
     <?php include '../includes/navbar.php'; ?>   
     
<main> 
  <!-- cometas -->
  <div id="cieloCometas">
  <canvas id="cometas"></canvas>
</div>
      <!--arranca la publicidad  -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <a href="src/juegos/GodOfWarRagnarok.html"> 
                <img src="../img/juegos/logoGodOfWar.png" class="d-block w-100 " alt="Halo1">              
                 </a>
              </div>

              <div class="carousel-item ">
                <a href="../juegos/EaSportsFc25.html">
                <img src="../img/juegos/TheWicher.png" class=" d-block w-100" alt="Metro">          
                </a>
              </div>

              <div class="carousel-item ">
                <a href="src/juegos/GodOfWar.html"> 
                <img src="../img/juegos/diablo.png" class="d-block w-100" alt="GodOfWar">              
                </a>
              </div>
     
            </div>
        </div>
        <!-- termina la publicidad -->
           
   <!-- arranca el contenedor padre  -->
    <div id="contenedorPadre">
      
      <div  class="Titulos">
        <h1>Increíbles rebajas de 8bit</h1>
      </div>
     <!--arranca los contenedores de tarjetas -->
       <div class="contenedorTarjetasPrincipales1">
        
        <div class="card bg-transparent estiloDeTarjeta1 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/juegos/GodOfWar.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a>
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta1 ">
            <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/juegos/Halo1.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a>
          </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta1 ">
            <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/juegos/Metro Exodus - Lucas Galan.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a> 
          </div>
          </a>
          </div>

       </div>

    

       <div  class="Titulos">
        <h1>Las ofertas de 8bit han llegado</h1>
      </div>

       <!-- contenedor numero2 de las tarjetas -->
       <div class="contenedorTarjetas2">
        <!-- Tarjeta individual -->
        <div class="card bg-transparent estiloDeTarjeta2">
             <img src="../img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
            <div class="card-body">
                <h5 class="card-title">Forza Horizon 5</h5>
                <a href="juegos/ForzaHorizon5.html" class="precio-gamer">$59.99 USD</a>
            </div>
        </div>

        <div class="card bg-transparent estiloDeTarjeta2">
            <img src="../img/juegos/Marvel_spiderman.jpg" class="card-img-top2" alt="Marvel Spiderman">
            <div class="card-body">
                <h5 class="card-title">Marvel spiderman</h5>
                <a href="juegos/MarvelSpiderman.html" class="precio-gamer">$59.99 USD</a>
            </div>
        </div>

        <div class="card bg-transparent estiloDeTarjeta2">
            <img src="../img/juegos/thelastofus.jpg" class="card-img-top2 god" alt="thelast">
            <div class="card-body">
                <h5 class="card-title">The last of us</h5>
                <a href="juegos/GodOfWar.html" class="precio-gamer">$49.99 USD</a>
            </div>
        </div>

        <div class="card bg-transparent estiloDeTarjeta2">
            <img src="../img/juegos/gtav.jpg" class="card-img-top2" alt="Red Dead Redemption 2">
            <div class="card-body">
                <h5 class="card-title">GTA V</h5>
                <a href="juegos/RedDeadRedemption2.html" class="precio-gamer">$59.99 USD</a>
            </div>
        </div>

        <div class="card bg-transparent estiloDeTarjeta2">
            <img src="../img/juegos/Cyberpunk2077.jpg" class="card-img-top2" alt="The Last Of Us">
            <div class="card-body">
                <h5 class="card-title">Cyberpunk 2077</h5>
                <a href="src/juegos/Cyber/Cyberpunk2077.html" class="precio-gamer">$59.99 USD</a>
            </div>
        </div>

        
    </div>
 
      <div  class="Titulos">
        <h1>Sagas</h1>
      </div>
       <!-- contenedor numero3 de las tarjetas -->
       <div class="contenedorTarjetasPrincipales3">
        <!--arranca los contenedores de tarjetas -->
        <div class="card bg-transparent estiloDeTarjeta3 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/juegos/godofwarsaga.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">God Of War</h5>
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;">
            <img src="../img/juegos/saga2.jpeg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Assassin’s Creed</h5>
            </div>
            </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/juegos/halosaga.jpeg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Halo</h5>     
            </div>
          </a>
          </div>
       </div>


       <div  class="Titulos">
        <h1>Generos mas jugados</h1>
      </div>
       
      <!-- contenedor numero4 de las tarjetas -->
        
       <div class="contenedorTarjetasPrincipales3">
        <!--arranca los contenedores de tarjetas -->
        <div class="card bg-transparent estiloDeTarjeta3 ">
          <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/generos/terror.jpg" class="card-img-top" alt="cambiar nombre"> 
             
            <div class="card-body">
              <h5 class="card-title">Terror</h5>
            </div>
          </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;">
            <img src="../img/generos/supervivencia.jpeg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Supervivencia</h5>
            </div>
            </a>
          </div>

          <div class="card bg-transparent estiloDeTarjeta3 ">
            <a href="" style="text-decoration: none; color: white;"> 
            <img src="../img/generos/pelea.jpg" class="card-img-top" alt="cambiar nombre">
            <div class="card-body">
              <h5 class="card-title">Pelea</h5>     
            </div>
          </a>
          </div>
            
       </div>

       <div class="contenedorTarjetasPrincipales3">
         <!-- div de color para la publicidad -->
         

       <!-- arranca la promo --> 
        <div class=" promo">
           
            <div class="columna1">
             <img class="imgInterfaz" src="../img/pollo.png" alt="promo">
            </div>
             
          
             <div class="columna2">
              <span>8bit Connect</span>
              <br>
              <span>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Corporis explicabo maxime, officia quisquam pariatur ratione modi asperiores</span>
             </div> 
           </div>  
           </div>
             <!-- termina la promo -->

         
    </div>
    <!-- termina el contenedor padre -->
</main>
<!-- incluimos el footerLogo -->
<?php include '../includes/footerLogo.php'; ?>


<!-- incluimos el footer -->
<?php include '../includes/footer.php'; ?>

<script src="../js/cometas.js"> </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
