 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/library.css">
 
  
   <div class="text-center mb-4">
    <h2 class="titulo">Tu Biblioteca</h2>
  </div>

  <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-biblioteca-tab" data-bs-toggle="pill" data-bs-target="#pills-biblioteca" type="button" role="tab" aria-controls="pills-biblioteca" aria-selected="true">
        Biblioteca
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-favoritos-tab" data-bs-toggle="pill" data-bs-target="#pills-favoritos" type="button" role="tab" aria-controls="pills-favoritos" aria-selected="false">
        Favoritos
      </button>
    </li>
  </ul>
<section class="biblioteca container py-5">

 

  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-biblioteca" role="tabpanel" aria-labelledby="pills-biblioteca-tab" tabindex="0">
      <div class="contenedor-img d-flex flex-wrap justify-content-start gap-4">

      <a href="emulator/EmulatorJS-main" style="text-decoration:none">
         <div class="card bg-transparent estiloDeTarjeta2 ">
        <img src="img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
        <div class="card-body">
          <h5 class="card-title">Forza Horizon 5</h5>
          </div>
        </div>
      </a>

      <a href="emulator/EmulatorJS-main" style="text-decoration:none">
         <div class="card bg-transparent estiloDeTarjeta2 ">
        <img src="img/juegos/Forza_Horizon_5_1.jpg" class="card-img-top2" alt="Forza Horizon 5">
        <div class="card-body">
          <h5 class="card-title">Forza Horizon 5</h5>
          </div>
        </div>
      </a>

      </div>
    </div>

 <div class="tab-pane fade" id="pills-favoritos" role="tabpanel" aria-labelledby="pills-favoritos-tab" tabindex="0">
  <div class="contenedor-img d-flex flex-wrap justify-content-start gap-4" id="contenedor-fav">
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const contenedorFav = document.getElementById('contenedor-fav');
  
  const favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

  const favoritosValidos = favoritos.filter(j => j.id && j.nombre && j.imagen);

  if (favoritosValidos.length === 0) {
    contenedorFav.innerHTML = '<p class="text-secondary">No hay juegos en favoritos.</p>';
  } else {
    contenedorFav.innerHTML = favoritosValidos.map(j => `
      <a href="store_page.php?id=${j.id}" style="text-decoration:none">
        <div class="card bg-transparent estiloDeTarjeta2 border-warning">
          <img src="${j.imagen}" class="card-img-top2" alt="${j.nombre}">
          <div class="card-body">
            <h5 class="card-title">${j.nombre}</h5>
          </div>
        </div>
      </a>
    `).join('');
  }
});
</script>



  </div>

</section>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 