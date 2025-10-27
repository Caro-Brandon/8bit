<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
    <link rel="icon" href="src/img/IconoSinBorde.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Soporte.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-lg border-0">
        <div class="container-fluid px-3">
            <a class="navbar-brand d-flex align-items-center me-3" href="#">
                <img src="src/img/IconoSinBorde.png" alt="GameStore Logo" class="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Store page/storepage.php">Juegos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ofertas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link active" href="../PaginaNoticias/PaginaNoticias.php">Noticias</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-person-circle"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-cart-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section d-flex flex-column justify-content-center align-items-center text-center text-light">
        <div class="container">
            <p class="subtitle mb-1">Asistencia de Teko</p>
            <h1 class="main-title">¿En qué podemos ayudarte?</h1>

            <div class="accordion search-accordion mx-auto mt-5" id="accordionSearch">
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button collapsed bg-transparent text-light border rounded-pill px-4 py-3"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSearch"
                            aria-expanded="false" aria-controls="collapseSearch">
                            <i class="bi bi-search me-2"></i> Buscar apoyo...
                        </button>
                    </h2>
                    <div id="collapseSearch" class="accordion-collapse collapse">
                        <div class="accordion-body bg-light rounded-4 mt-3">
                            <div class="search-suggestions text-start">
                                <ul class="list-unstyled">
                                    <li>No puedo acceder a mi cuenta</li>
                                    <li>Cómo solicitar un reembolso</li>
                                    <li>Problemas al iniciar un juego</li>
                                    <li>Error de pago con tarjeta</li>
                                    <li>Cambiar correo o contraseña</li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Buscar manualmente...">
                            </div>
                            <div class="text-end mt-3">
                                <button class="btn btn-primary px-4">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-section py-5">
        <div class="container">
            <h3 class="faq-title">Preguntas Frecuentes</h3>

            <div class="accordion faq-accordion" id="faqGeneral">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            ¿Cómo restablezco mi contraseña?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                        <div class="accordion-body">
                            Podés restablecerla desde la sección de configuración de tu cuenta.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            ¿Cómo activar la autenticación en dos pasos?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                        <div class="accordion-body">
                            Accedé a seguridad de cuenta y activá la opción 2FA.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            ¿Qué hago si mi cuenta fue hackeada?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                        <div class="accordion-body">
                            Contactá soporte con información de tu cuenta comprometida.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            ¿Puedo cambiar mi nombre de usuario?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                        <div class="accordion-body">
                            Sí, podés cambiarlo desde tu perfil, máximo una vez cada 30 días.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-1 text-light">© 2025 8BIT.</p>
            <small class="text-secondary">Desarrollado por Teko</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
