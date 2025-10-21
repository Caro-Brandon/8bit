<link rel="stylesheet" href="css/cart.css">
<?php

if(isset($_GET['add'])){
  $idJuego = (int)$_GET['add'];
  if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
  if(!in_array($idJuego, $_SESSION['cart'])){
      $_SESSION['cart'][] = $idJuego;
  }
}


if(isset($_GET['remove'])){
  $idJuego = (int)$_GET['remove'];
  if(isset($_SESSION['cart'])){
      $_SESSION['cart'] = array_filter($_SESSION['cart'], fn($id) => $id != $idJuego);
      $_SESSION['cart'] = array_values($_SESSION['cart']); 
  }
  
}

$total = 0;
?>
<div class="carrito-container">
    <div class="cesta">
        <h2>Tu Carrito</h2>
        <?php if(empty($_SESSION['cart'])): ?>
            <div class="cesta-vacia">
                <div class="icono-carrito">🛒</div>
                <h3>Tu carrito está vacío</h3>
                <p>Agrega productos para comenzar tu compra</p>
            </div>
        <?php else: ?>
            <div class="cesta-items" id="cesta-items">
            <?php foreach($_SESSION['cart'] as $idJuego):
                $juego = $conex->query("SELECT nombreDelJuego, precio FROM videojuego WHERE idVideoJuego=$idJuego")->fetch_assoc();
                $total += $juego['precio'];
            ?>
                <div class="item-carrito d-flex justify-content-between align-items-center mb-2 p-2 bg-dark text-light rounded" id="item-<?= $idJuego ?>">
                    <span><?= htmlspecialchars($juego['nombreDelJuego']) ?></span>
                    <span>$<?= number_format($juego['precio'],2) ?></span>
                    <a href="?remove=<?= $idJuego ?>" class="btn btn-sm btn-danger">Eliminar</a>


                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="resumen">
    <h2>Resumen</h2>
    <p id="total">Total: <?= number_format($total, 2,) ?></p>
    <a href="payment_method.php" class="seguir"><button class="btn-siguiente">Siguiente</button></a>
    <a href="index.php" class="seguir">Seguir comprando</a>
</div>
</div>
 

<script>
  function eliminarJuego(idJuego, btn){
    fetch('remove_from_cart.php?id=' + idJuego)
    .then(res => res.text())
    .then(res => {
        if(res === "ok"){
            btn.parentElement.remove();
            actualizarTotal(); 
        }
    });
}


function actualizarTotal(){
    let total = 0;
    document.querySelectorAll('#cesta-items .item-carrito').forEach(el=>{
        total += parseFloat(el.querySelector('span:nth-child(2)').innerText.replace('$',''));
    });
     document.getElementById('total').innerText = 'Total: ' + total.toFixed(3);

    if(document.querySelectorAll('#cesta-items .item-carrito').length === 0){
        document.getElementById('cesta-items').innerHTML = `
        <div class="cesta-vacia">
            <div class="icono-carrito">🛒</div>
            <h3>Tu carrito está vacío</h3>
            <p>Agrega productos para comenzar tu compra</p>
        </div>`;
    }
}
</script>

