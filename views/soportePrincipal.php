<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soporte</title>
    <link rel="icon" href="src/img/IconoSinBorde.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/Soporte.css" />
    <script src="src/js/Soporte.js" defer></script>
</head>

<body>

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
                                <ul class="list-unstyled mb-0">
                                    <li><a href="Soporte1.html">¿No puedes acceder a mi cuenta?</a></li>
                                    <li><a href="Soporte2.html">¿Cómo solicito un reembolso?</a></li>
                                    <li><a href="Soporte3.html">¿Problemas al iniciar un juego?</a></li>
                                    <li><a href="Soporte4.html">¿Error de pago con tarjeta?</a></li>
                                    <li><a href="Soporte5.html">¿Cómo cambiar correo o contraseña?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ir-section py-4">
        <div class="container">
            <h3 class="ir-title mb-5">Ir a...</h3>
            <div class="row g-3 justify-content-center">
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#faq" class="ir-card d-block text-decoration-none rounded-4 p-3 text-light">
                        <div class="ir-card-inner text-center">
                            <div class="ir-title">Preguntas Frecuentes</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#noticias" class="ir-card d-block text-decoration-none rounded-4 p-3 text-light">
                        <div class="ir-card-inner text-center">
                            <div class="ir-title">Noticias</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#juegos" class="ir-card d-block text-decoration-none rounded-4 p-3 text-light">
                        <div class="ir-card-inner text-center">
                            <div class="ir-title">Juegos</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <a href="#empresas" class="ir-card d-block text-decoration-none rounded-4 p-3 text-light">
                        <div class="ir-card-inner text-center">
                            <div class="ir-title">Empresas</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="faq" class="preguntasfrecuentes-section py-5">
        <div class="container">
            <h3 class="faq-title mb-5">Preguntas Frecuentes</h3>

            <div class="faq-grid">
                <div class="faq-item">
                    <button class="faq-question">Dirección de correo electrónico olvidada</button>
                    <div class="faq-answer">
                        <p>Podés recuperar tu correo verificando la cuenta asociada o contactando soporte con tus datos
                            de registro.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Contraseña olvidada</button>
                    <div class="faq-answer">
                        <p>Ingresá a la página de recuperación de Ubisoft e introducí tu correo para restablecer tu
                            contraseña.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Recuperar tu cuenta</button>
                    <div class="faq-answer">
                        <p>Si tu cuenta fue comprometida, Ubisoft puede ayudarte a recuperarla verificando tu identidad.
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Autenticación en dos pasos</button>
                    <div class="faq-answer">
                        <p>Activá el 2FA desde los ajustes de seguridad para proteger tu cuenta de accesos no
                            autorizados.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Reembolsos de la tienda</button>
                    <div class="faq-answer">
                        <p>Podés solicitar un reembolso dentro de los 14 días de la compra si no superaste las 2 horas
                            de juego.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">Control parental</button>
                    <div class="faq-answer">
                        <p>Desde los ajustes de cuenta podés configurar restricciones de compras y horarios para
                            jugadores menores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias" class="noticias-section py-5">
        <div class="container">
            <h3 class="section-title mb-4">Noticias</h3>
            <div class="noticias-grid">

                <div class="noticias-card">
                    <div class="overlay"></div>
                    <div class="noticias-content">
                        <div class="noticias-date">
                            <i class="bi bi-calendar-event text-danger calendar-icon"></i>
                            <span class="date-text">25 Oct 2025</span>
                        </div>
                        <p class="noticias-desc">
                            Nueva actualización del sistema con mejoras de rendimiento y estabilidad general.
                        </p>
                    </div>
                </div>

                <div class="noticias-card">
                    <div class="overlay"></div>
                    <div class="noticias-content">
                        <div class="noticas-date">
                            <i class="bi bi-calendar-event text-danger calendar-icon"></i>
                            <span class="date-text">22 Oct 2025</span>
                        </div>
                        <p class="noticias-desc">
                            El esperado DLC llega en noviembre con nuevas misiones y trajes.
                        </p>
                    </div>
                </div>

                <div class="noticias-card">
                    <div class="overlay"></div>
                    <div class="noticias-content">
                        <div class="noticias-date">
                            <i class="bi bi-calendar-event text-danger calendar-icon"></i>
                            <span class="date-text">18 Oct 2025</span>
                        </div>
                        <p class="noticias-desc">
                            Se confirman detalles del lanzamiento y mejoras visuales para consolas next-gen.
                        </p>
                    </div>
                </div>

                <div class="noticias-card">
                    <div class="overlay"></div>
                    <div class="noticias-content">
                        <div class="noticias-date">
                            <i class="bi bi-calendar-event text-danger calendar-icon"></i>
                            <span class="date-text">15 Oct 2025</span>
                        </div>
                        <p class="noticias-desc">
                            El evento “Minecraft Live” presenta nuevas criaturas y biomas únicos.
                        </p>
                    </div>
                </div>

                <div class="noticias-card">
                    <div class="overlay"></div>
                    <div class="noticias-content">
                        <div class="noticias-date">
                            <i class="bi bi-calendar-event text-danger calendar-icon"></i>
                            <span class="date-text">10 Oct 2025</span>
                        </div>
                        <p class="noticias-desc">
                            Se lanza la beta abierta de la nueva plataforma de soporte técnico.
                        </p>
                    </div>
                </div>

                <div class="noticias-card">
                    <div class="overlay"></div>
                    <div class="noticias-content">
                        <div class="noticias-date">
                            <i class="bi bi-calendar-event text-danger calendar-icon"></i>
                            <span class="date-text">5 Oct 2025</span>
                        </div>
                        <p class="noticias-desc">
                            Celebramos el aniversario con recompensas exclusivas para los usuarios.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="juegos" class="games-section py-5">
        <div class="container">
            <h3 class="section-title mb-4">Juegos</h3>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="game-card rounded-4" id="juego1"></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="game-card rounded-4" id="juego2"></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="game-card rounded-4" id="juego3"></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="game-card rounded-4" id="juego4"></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="game-card rounded-4" id="juego5"></div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="game-card rounded-4" id="juego6"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="empresas" class="empresas-section py-5">
        <div class="container text-center">
            <h3 class="empresas-title mb-4">Empresas que confían en nosotros</h3>

            <p class="empresas-desc">
                Nuestra tienda online colabora con marcas reconocidas que nos brindan sus productos y confianza.
                Gracias a estas alianzas, ofrecemos a nuestros clientes artículos de calidad, entregas seguras
                y promociones exclusivas. Nos enorgullece trabajar junto a empresas que comparten nuestra pasión
                por la innovación y la experiencia digital.
            </p>

            <div class="logos-slider">
                <div class="logos-track">
                    <img src="src/img/FC26.png" alt="Logo 1" class="empresa-logo">
                    <img src="src/img/1.png" alt="Logo 2" class="empresa-logo">
                    <img src="src/img/19.png" alt="Logo 3" class="empresa-logo">
                    <img src="src/img/3.png" alt="Logo 4" class="empresa-logo">
                    <img src="src/img/4.png" alt="Logo 5" class="empresa-logo">
                    <img src="src/img/9.png" alt="Logo 6" class="empresa-logo">

                    <img src="src/img/13.png" alt="Logo 1" class="empresa-logo">
                    <img src="src/img/14.png" alt="Logo 2" class="empresa-logo">
                    <img src="src/img/12.png" alt="Logo 3" class="empresa-logo">
                    <img src="src/img/17.png" alt="Logo 4" class="empresa-logo">
                    <img src="src/img/18.png" alt="Logo 5" class="empresa-logo">
                    <img src="src/img/20.png" alt="Logo 6" class="empresa-logo">
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const faqs = document.querySelectorAll(".faq-item");
            faqs.forEach(faq => {
                const button = faq.querySelector(".faq-question");
                button.addEventListener("click", e => {
                    e.preventDefault();
                    if (faq.classList.contains("active")) {
                        faq.classList.remove("active");
                        return;
                    }
                    faqs.forEach(item => item.classList.remove("active"));
                    faq.classList.add("active");
                });
            });

            const searchButton = document.querySelector(".accordion-button");
            const searchCollapse = document.querySelector("#collapseSearch");

            searchButton.removeAttribute("data-bs-toggle");
            searchButton.removeAttribute("data-bs-target");
            searchCollapse.classList.remove("collapse");

            let isOpen = false;
            searchCollapse.style.display = "none";

            searchButton.addEventListener("click", e => {
                e.preventDefault();

                isOpen = !isOpen;

                if (isOpen) {
                    searchCollapse.style.display = "block";
                    searchButton.classList.remove("collapsed");
                    searchButton.setAttribute("aria-expanded", "true");
                } else {
                    searchCollapse.style.display = "none";
                    searchButton.classList.add("collapsed");
                    searchButton.setAttribute("aria-expanded", "false");
                }
            });

            const respuestas = {
                "¿No puedes acceder a mi cuenta?": `
            Verifica tu correo y contraseña. Si olvidaste tu clave, podés restablecerla pidiendo un código en tu correo electrónico para cambiarla.
        `,
                "¿Cómo solicito un reembolso?": `
            Podés solicitar un reembolso dentro de los 14 días posteriores a la compra, siempre que no hayas jugado más de 2 horas. Encontrarás la opción en tu historial de compras.
        `,
                "¿Problemas al iniciar un juego?": `
            Asegurate de que el juego esté completamente actualizado y que tus controladores de video estén al día. Si el problema persiste, intentá verificar los archivos desde la biblioteca.
        `,
                "¿Error de pago con tarjeta?": `
            Comprobá que los datos de tu tarjeta sean correctos, que tenga fondos y que no esté vencida. Si el error continúa, probá con otro método de pago.
        `,
                "¿Cómo cambiar correo o contraseña?": `
            Podés cambiar tu correo o contraseña desde la configuración de tu cuenta, en el apartado de seguridad. Recordá confirmar los cambios por correo electrónico.
        `
            };

            const suggestionLinks = document.querySelectorAll(".search-suggestions a");

            suggestionLinks.forEach(link => {
                link.addEventListener("click", e => {
                    e.preventDefault();

                    const sectionsToRemove = [
                        ".ir-section",
                        ".preguntasfrecuentes-section",
                        ".noticias-section",
                        ".empresas-section",
                        ".games-section"
                    ];
                    sectionsToRemove.forEach(sel => {
                        const section = document.querySelector(sel);
                        if (section) section.remove();
                    });

                    const pregunta = link.textContent.trim();
                    const respuesta = respuestas[pregunta] || "No se encontró información para esta consulta.";

                    const oldResponse = document.querySelector(".respuesta-section");
                    if (oldResponse) oldResponse.remove();

                    const container = document.createElement("section");
                    container.classList.add("respuesta-section");
                    container.style.cssText = `
                color: #fff;
                text-align: center;
                padding: 60px 20px;
                max-width: 800px;
                margin: 40px auto 0 auto;
                font-family: 'Poppins', sans-serif;
            `;

                    container.innerHTML = `
                <h2 style="
                    font-size: 1.8rem;
                    font-weight: 700;
                    margin-bottom: 20px;
                ">${pregunta}</h2>
                <p style="
                    font-size: 1rem;
                    line-height: 1.8;
                    color: #ddd;
                ">${respuesta}</p>
            `;
                    const searchContainer = document.querySelector(".accordion");
                    searchContainer.insertAdjacentElement("afterend", container);
                    searchCollapse.style.display = "none";
                    searchButton.classList.add("collapsed");
                    searchButton.setAttribute("aria-expanded", "false");
                    isOpen = false;
                });
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>