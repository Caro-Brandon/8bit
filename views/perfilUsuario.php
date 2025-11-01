<link rel="stylesheet" href="css/perfilUsuario.css">

<div class="perfil-dashboard">

  <div class="perfil-header">
    <div class="perfil-avatar-container">
      <div class="perfil-avatar">
        <img id="avatar" src="img/avatar.png" alt="Avatar Default">
        <input type="file" id="inputFotoPerfil" accept="image/*" style="display:none;">
      </div>

      <div class="perfil-avatar-botones">
        <button class="btn-cambiar-foto" onclick="document.getElementById('inputFotoPerfil').click()">Cambiar
          foto</button>
        <button class="btn-restaurar-foto" id="btnRestaurarFoto">Restaurar foto</button>
      </div>
    </div>

    <div class="perfil-info">
      <input type="text" id="nombre" class="nombre-editable" maxlength="30" placeholder="Escribe tu nombre...">
      <p class="ubicacion"><span id="ciudad">Buenos Aires</span>, <span id="pais">Argentina</span></p>
      <textarea id="bio" class="bio-editable" placeholder="Escribe algo sobre ti..."></textarea>
    </div>
  </div>

  <div class="perfil-secciones">
    <ul>
      <li><a href="#">Configuración</a></li>
      <li><a href="soportePrincipal.php">Soporte</a></li>
      <li><a href="#">Privacidad</a></li>
      <li><a href="#">Notificaciones</a></li>
      <li><a href="#">Seguridad</a></li>
    </ul>
    <a href="logout.php"><button class="btn-logout">Cerrar Sesión</button></a>
  </div>

  <div class="perfil-juegos">
    <h2>Juegos Adquiridos</h2>

    <div class="juego">
      <img src="img/juego1.jpg" alt="Assassin’s Creed Shadows">
      <div class="info-juego">
        <h3>Assassin’s Creed Shadows</h3>
        <p>Última sesión: 12h</p>
      </div>
    </div>

    <div class="juego">
      <img src="img/juego2.jpg" alt="Star Wars Outlaws">
      <div class="info-juego">
        <h3>Star Wars Outlaws</h3>
        <p>Última sesión: 6h</p>
      </div>
    </div>

    <div class="juego">
      <img src="img/juego3.jpg" alt="The Crew Motorfest">
      <div class="info-juego">
        <h3>The Crew Motorfest</h3>
        <p>Última sesión: 3h</p>
      </div>
    </div>
  </div>

  <script>

    const inputFotoPerfil = document.getElementById("inputFotoPerfil");
    const avatar = document.getElementById("avatar");
    const btnRestaurarFoto = document.getElementById("btnRestaurarFoto");

    const fotoOriginal = avatar.src;

    inputFotoPerfil.addEventListener("change", (event) => {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          avatar.src = e.target.result;
          localStorage.setItem("fotoPerfil", e.target.result);
        };
        reader.readAsDataURL(file);
      }
    });

    window.addEventListener("DOMContentLoaded", () => {
      const fotoGuardada = localStorage.getItem("fotoPerfil");
      if (fotoGuardada) avatar.src = fotoGuardada;
    });

    btnRestaurarFoto.addEventListener("click", () => {
      avatar.src = fotoOriginal;
      localStorage.removeItem("fotoPerfil");
    });


    const secciones = document.querySelectorAll(".perfil-secciones a[href='#']");
    const contenedorJuegos = document.querySelector(".perfil-juegos");

    function animarTransicion(elemento) {
      elemento.style.opacity = 0;
      setTimeout(() => (elemento.style.opacity = 1), 100);
    }

    function crearCampo(label, type, placeholder) {
      const wrapper = document.createElement("div");
      wrapper.style.marginBottom = "20px";

      const lbl = document.createElement("label");
      lbl.textContent = label;
      lbl.style.display = "block";
      lbl.style.color = "#b18aff";
      lbl.style.fontWeight = "bold";
      lbl.style.marginBottom = "6px";

      const input = document.createElement("input");
      input.type = type;
      input.placeholder = placeholder;
      input.className = "campo-estilo";

      wrapper.appendChild(lbl);
      wrapper.appendChild(input);
      return wrapper;
    }

    function crearBoton(texto) {
      const btn = document.createElement("button");
      btn.textContent = texto;
      btn.className = "btn-guardar";
      btn.style.marginTop = "10px";
      btn.addEventListener("click", () => {
        alert("Cambios guardados correctamente.");
      });
      return btn;
    }

    function crearBloqueDescripcion(texto) {
      const p = document.createElement("p");
      p.textContent = texto;
      p.style.color = "#d1c4ff";
      p.style.fontSize = "15px";
      p.style.marginBottom = "20px";
      p.style.lineHeight = "1.6";
      p.style.background = "rgba(126,92,242,0.1)";
      p.style.padding = "12px 16px";
      p.style.borderRadius = "10px";
      p.style.border = "1px solid rgba(158,131,255,0.3)";
      return p;
    }

    function crearOpcionCheckbox(texto) {
      const label = document.createElement("label");
      label.style.display = "block";
      label.style.margin = "10px 0";
      label.style.color = "#fff";
      label.style.background = "rgba(126,92,242,0.15)";
      label.style.padding = "10px 14px";
      label.style.borderRadius = "10px";
      label.style.border = "1px solid rgba(158,131,255,0.25)";
      label.style.cursor = "pointer";
      label.style.transition = "0.2s";

      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.style.marginRight = "10px";
      checkbox.addEventListener("change", () => {
        label.style.background = checkbox.checked
          ? "rgba(158,131,255,0.35)"
          : "rgba(126,92,242,0.15)";
      });

      label.appendChild(checkbox);
      label.appendChild(document.createTextNode(texto));
      return label;
    }

    function cargarFormulario(tipo) {
      contenedorJuegos.innerHTML = "";
      const titulo = document.createElement("h2");
      titulo.style.color = "#b18aff";

      animarTransicion(contenedorJuegos);

      if (tipo === "configuracion") {
        titulo.textContent = "Configuración de Cuenta";

        const email = crearCampo("Correo Electrónico:", "text", "Ingresa tu correo...");
        const pass = crearCampo("Contraseña:", "password", "Ingresa tu contraseña...");

        const btnGuardar = crearBoton("Guardar cambios");

        contenedorJuegos.appendChild(titulo);
        contenedorJuegos.appendChild(email);
        contenedorJuegos.appendChild(pass);
        contenedorJuegos.appendChild(btnGuardar);
      }

      if (tipo === "privacidad") {
        titulo.textContent = "Privacidad";
        const descripcion = crearBloqueDescripcion(
          "Controla quién puede ver tu perfil, tu última conexión y tu información personal. Mantén tu privacidad configurada como desees."
        );

        const opciones = [
          "Perfil visible solo para amigos",
          "Ocultar mi última conexión",
          "No mostrar mi correo público",
          "Evitar que me busquen por nombre de usuario"
        ];

        contenedorJuegos.appendChild(titulo);
        contenedorJuegos.appendChild(descripcion);

        opciones.forEach(op => {
          contenedorJuegos.appendChild(crearOpcionCheckbox(op));
        });

        contenedorJuegos.appendChild(crearBoton("Guardar preferencias"));
      }


      if (tipo === "notificaciones") {
        titulo.textContent = "Notificaciones";
        const descripcion = crearBloqueDescripcion(
          "Configura qué notificaciones quieres recibir. Puedes activarlas o desactivarlas según tus preferencias."
        );

        const opciones = [
          "Recibir correos sobre promociones",
          "Notificarme cuando un amigo se conecta",
          "Alertas de seguridad por nuevos dispositivos",
          "Recordatorios de juegos pendientes"
        ];

        contenedorJuegos.appendChild(titulo);
        contenedorJuegos.appendChild(descripcion);

        opciones.forEach(op => {
          contenedorJuegos.appendChild(crearOpcionCheckbox(op));
        });

        contenedorJuegos.appendChild(crearBoton("Guardar notificaciones"));
      }

      if (tipo === "seguridad") {
        titulo.textContent = "Seguridad";
        const descripcion = crearBloqueDescripcion(
          "Protege tu cuenta activando medidas de seguridad adicionales. Recomendamos habilitar la verificación en dos pasos para mayor protección."
        );

        const opciones = [
          "Activar verificación en dos pasos",
          "Recibir alerta ante intentos de inicio sospechosos",
          "Permitir cierre de sesión en todos los dispositivos",
          "Solicitar contraseña al cambiar datos sensibles"
        ];

        contenedorJuegos.appendChild(titulo);
        contenedorJuegos.appendChild(descripcion);

        opciones.forEach(op => {
          contenedorJuegos.appendChild(crearOpcionCheckbox(op));
        });

        contenedorJuegos.appendChild(crearBoton("Guardar seguridad"));
      }
    }

    secciones.forEach(link => {
      link.addEventListener("click", (e) => {
        e.preventDefault();
        const texto = link.textContent.trim().toLowerCase();

        if (texto === "configuración") cargarFormulario("configuracion");
        else if (texto === "privacidad") cargarFormulario("privacidad");
        else if (texto === "notificaciones") cargarFormulario("notificaciones");
        else if (texto === "seguridad") cargarFormulario("seguridad");
      });
    });
  </script>