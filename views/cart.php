<?php
$total = 0;

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
?>

<link rel="stylesheet" href="css/cart.css">

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
                    <div class="item-carrito d-flex justify-content-between align-items-center mb-2 p-2 bg-dark text-light rounded" data-id="<?= $idJuego ?>">
                        <span class="nombre"><?= htmlspecialchars($juego['nombreDelJuego']) ?></span>
                        <span class="precio">$<?= number_format($juego['precio'],2) ?></span>
                        <button class="btn btn-sm btn-danger btn-eliminar">Eliminar</button>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="resumen">
        <h2>Resumen</h2>
        <p id="total">Total: $<?= number_format($total, 2) ?></p>

        <?php if(empty($_SESSION['cart'])): ?>
            <button class="btn-siguiente" disabled>Siguiente</button>
        <?php else: ?>
            <a href="payment_method.php" class="seguir"><button class="btn-siguiente">Siguiente</button></a>
        <?php endif; ?>
        <a href="index.php" class="seguir">Seguir comprando</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const cestaItems = document.getElementById('cesta-items');

    cestaItems?.addEventListener('click', e => {
        if(e.target.classList.contains('btn-eliminar')){
            const item = e.target.closest('.item-carrito');
            const idJuego = item.dataset.id;

            window.location.href = '?remove=' + idJuego;
        }
    });
});
</script>
