<?php
$total = 0;
$carritoJuegos = [];

if(!empty($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $idJuego){
        $juego = $conex->query("SELECT nombreDelJuego, precio FROM videojuego WHERE idVideoJuego=$idJuego")->fetch_assoc();
        if($juego){
            $total += $juego['precio'];
            $carritoJuegos[] = $juego;
        }
    }
}
?>

<link rel="stylesheet" href="css/payment_method.css">
<script src="https://www.paypal.com/sdk/js?client-id=AXbtEdXgFa6aYnLF_tmJqgCaGKMLrHb5Sr_DAz6vPBVWKSf5cBLn810lR4TEA6jn8BfzlRRu7a8y-l3G&currency=USD"></script>

<div class="payment-wrapper">
    <div class="payment-container">
        <h2>Selecciona tu método de pago</h2>

        <div id="monto" class="amount-display">
            Monto: $<?= number_format($total,2) ?>
        </div>

        <!-- PayPal -->
        <div id="paypal-button-container"></div>

        <!-- Mercado Libre / Simulado -->
        <a href="#" id="btn-simulado" class="btn-mercadolibre payment-option" style="text-decoration:none">
           <img src="img/IconoSinBorde.png" alt="8bit">
          <span>Pagar con billetera 8bit</span>
        </a>
        <hr>
      <a href="cart.php" style="text-decoration:none; color:violet">Regresar</a>
    </div>
    
</div>


<script>
 document.getElementById('btn-simulado').addEventListener('click', function(e){
    e.preventDefault(); 
    alert("Compra exitosa");

    fetch('empty_cart.php')
    .then(res => res.text()) 
    .then(res => {
        if(res.trim() === "ok"){
            window.location.href = 'success_payment.php';
        } else {
            console.error('Error al vaciar el carrito:', res);
            window.location.href = 'success_payment.php';
        }
    })
    .catch(err => {
        console.error('Error al vaciar el carrito:', err);
        window.location.href = 'success_payment.php'; 
    });
});

 

 
paypal.Buttons({
    createOrder: (data, actions) => {
        return actions.order.create({
            purchase_units: [{
                amount: { value: '<?= $total ?>' } 
            }]
        });
    },
    onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
            alert('Pago exitoso con PayPal');
            fetch('vaciar_carrito.php').then(res => {
                if(res === "ok"){
                    window.location = '../success_payment.php';
                }
            });
        });
    }
}).render('#paypal-button-container');
</script>