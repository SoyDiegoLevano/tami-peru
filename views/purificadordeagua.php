<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="icon" href="../public/images/TAMILOGOtransparente.webp" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PURIFICADOR DE AGUA | TAMI</title>
<meta name=description content="Esta es una descripción breve de tu página web. Puedes proporcionar información sobre el contenido de la página y su propósito.">
<link rel="stylesheet" type="text/css" href="../public/css/menu.css" >
<link rel="stylesheet" type="text/css" href="../public/css/footer.css" >
<link rel="stylesheet" type="text/css" href="../public/css/productosindividuales.css" >
<link rel="stylesheet" type="text/css" href="../public/css/formulario.css">
<meta name="google-site-verification" content="gL9FykkVgDgo2C_D_YokzB_-CSFaBVctYmHBZTISOKw" />
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KX4C6BWBSR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KX4C6BWBSR');
</script>
<body>
<?php include_once "header.php";?>
<main class="p_individual">
    <div class="modal-content">
        <div class="product-details">
            <div class="product-images">
                <div class="image-container">
                    <img class="principal-img" src="../public/images/catalogo_productos/PurificadordeAgua/principal-imagen-purificador-de-agua.webp" />
                    <video class="principal-img" src="../public/videos/WPCWall.mp4" style="display:none" controls></video>
                </div>
                <div class="product-thumbnails">
                    <img src="../public/images/catalogo_productos/PurificadordeAgua/producto.webp" alt="Thumbnail 1" onclick="changeMedia(this)"/>
                    <img src="../public/images/catalogo_productos/PurificadordeAgua/imagen-purificador-de-agua-3.webp" alt="Thumbnail 2" onclick="changeMedia(this)"/>
                    <img src="../public/images/catalogo_productos/PurificadordeAgua/Imagen-2.webp" alt="Thumbnail 3" onclick="changeMedia(this)"/>
                    <img src="../public/images/catalogo_productos/PurificadordeAgua/Imagen-1_Experiencia-de-cliente.webp" alt="Thumbnail 4" onclick="changeMedia(this)"/>
                    <video src="../public/videos/VIDEO PRINCIPAL_purificador de agua.mp4" alt="Thumbnail 5" onclick="changeMedia(this)"></video>
                    <!-- Agrega más miniaturas aquí según sea necesario -->
                </div>
            </div>

            <div class="product-info">
                <h2 class="pro_titulo">PURIFICADOR DE AGUA</h2>
                <div class="pro-opinion">
                    <div class="opinion-subcont">
                        <label>Valoración: </label>
                        ★★★☆☆
                    </div>
                    <div class="opinion-subcont">
                        <label>Comentarios: </label>
                        <span>30</span>
                    </div>
                </div>
                <div class="detalles">
                    <div class="detalles-subcont">
                        <label>Información: </label>
                        <br>
                        <span>El purificador de agua por ósmosis inversa funciona al pasar el agua a través de una membrana semipermeable 
                            que elimina impurezas, produciendo agua limpia y segura para beber y cocinar.</span>
                    </div>
                    <div class="detalles-subcont">
                        <div class="detalles-extra">
                            <b>Vida del filtro:</b>1-2 años, según la calidad del agua<br>
                            <b>Entrada y salida:</b> 1/2" (pulgadas) Rosca de tubería externa <br>
                            <b>Instalación:</b> Baño, cocina, etc. <br>
                            <b>Flujo de trabajo:</b> 60L/H <br>
                            <b>Material del filtro:</b> PAN de grado alimenticio <br>
                        </div>
                    </div>
                    <div class="detalles-subcont">
                        <label>Dimensiones:</label>
                        <br>
                        <table class="custom-table">
                            <tr>
                                <td>Longitud</td>
                                <td>Ancho</td>
                                <td>Altura</td>
                            </tr>
                            <tr>
                                <td>37.5cm</td>
                                <td>14.5cm</td>
                                <td>41cm</td>
                            </tr>
                        </table>
                    </div>
                    <div class="detalles-subcont">
                        <label>Mayor Información: </label>
                        <br>
                        <a href="contacto.php" class="btn-contactar">Contactar</a>
                        <button id="submitButton_WPC__WALLPANEL" class="button" style="display: none;">FINALIZAR</button>
                    </div>
                </div>
                <div class="calc-container">
                    <div class="counter">
                        <div class="counter-cell">
                            <button class="btn-counter" id="decrement">-</button>
                        </div>
                        <div class="counter-cell">
                            <span id="count">1</span>
                        </div>
                        <div class="counter-cell">
                            <button class="btn-counter" id="increment">+</button>
                        </div>
                    </div>
                    <button class="btn-cotizar" onclick="openModalForm()">Cotizar</button>
                </div>
            </div>
        </div>

        <div style="width: 100%; color: #7B7C89;">
            <div id="notification_WPC__WALLPANEL" style="display: none;" class="notification">
                <p id="notification-text_WPC__WALLPANEL"></p>
                <span class="notification__progress"></span>
            </div>
        </div>
    </div>
</main>
<?php include_once "footer.php";?>
<script type="application/javascript" src="../public/js/main.js" async></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function changeMedia(thumbnail) {
            // Obtener el contenedor de imágenes y videos
            var mediaContainer = thumbnail.closest(".modal-content").querySelector('.image-container');

            // Remover todos los elementos en el contenedor
            while (mediaContainer.firstChild) {
                mediaContainer.removeChild(mediaContainer.firstChild);
            }

            // Crear un nuevo elemento según el tipo de la miniatura clicada
            var newMedia;
            if (thumbnail.tagName === 'IMG') {
                newMedia = document.createElement('img');
                newMedia.src = thumbnail.src;
                newMedia.classList.add('principal-img');
            } else if (thumbnail.tagName === 'VIDEO') {
                newMedia = document.createElement('video');
                newMedia.src = thumbnail.src;
                newMedia.controls = true;
                newMedia.classList.add('principal-img');
            }

            // Agregar el nuevo elemento al contenedor
            mediaContainer.appendChild(newMedia);

            // Remover la clase 'selected' de todos los Thumbnails
            var thumbnails = thumbnail.closest(".modal-content").querySelectorAll('.product-thumbnails img, .product-thumbnails video');
            thumbnails.forEach(function(thumb) {
                thumb.classList.remove('selected');
            });

            // Agregar la clase 'selected' al Thumbnail seleccionado
            thumbnail.classList.add('selected');
        }
        function setUpCounter() {
            // Obtener los elementos del contador
            var decrementButton = document.getElementById("decrement");
            var incrementButton = document.getElementById("increment");
            var countElement = document.getElementById("count");
            let count = 1;


            decrementButton.addEventListener("click", function() {
                if (count > 1) {
                    count--;
                    updateCount();
                }
                console.log("decrement")
            });

            incrementButton.addEventListener("click", function() {
                count++;
                updateCount();
                console.log("incrementado")
            });

            function updateCount() {
                countElement.innerText = count;
            }
        }

//modal form
function generarModalForm() {
    const modalForm = document.createElement("div");
    modalForm.id = "modalForm";
    modalForm.classList.add("modalForm");
    modalForm.innerHTML = `
    <div class="modal-form-content">
            <span class="close" onclick="closeModalForm()">x</span>
            <label class="titleform">Cotizar Producto</label>
            <label class="titleform">¿SOLICITE UNA COTIZACIÓN</label>
            <label class="titleform">HOY Y OBTEN UN DESCUENTO</label>
            <label class="titleform">EXCLUSIVO!</label>
            <p><br><strong>¡Ahorra un 10% en tu primera compra! ¡No te</strong></p>
            <p><strong>pierdas esta oferta exclusiva para nuevos</strong></p>
            <p><strong>clientes!</strong></p>
            <form id="miFormulario" action="mensajewssp.php" method="POST">
                <div class="form-row">
                    <div class="form-column">
  
                        <input type="text" name="nombre" id="nombre" required placeholder="Nombre">

                        <input type="email" name="email" id="email" required placeholder="Correo Electrónico">

                        <input type="number" name="telefono" id="telefono" required placeholder="Número telefónico">
                    </div>
                    <div class="form-columnA">
                        <label>Producto a Comprar:</label>
                        <input type="text" name="producto" id="producto" disabled>

                        <label>Cantidad:</label>
                        <input type="number" name="cantidad" id="cantidad" required>
                    </div>
                </div>
                
                <input type="button" class="btn-cotizar" value="Cotizar Ya!" id="enviarCompra">
                <label class="Obtenerdescuento">Obtener descuento</label>
            </form>
        </div>
    `;
    document.body.appendChild(modalForm);
    
                    // Asociar la función al evento click del botón
                    document.getElementById(`submitButton_WPC__WALLPANEL`).addEventListener('click', () => mostrarNotificacion());
}
function mostrarNotificacion() {
                        const notification = document.getElementById(`notification_WPC__WALLPANEL`);
                        const notificationText = document.getElementById(`notification-text_WPC__WALLPANEL`);

                        // Restablecer las clases de animación para volver a reproducir la animación
                        notification.classList.remove('animate__fadeIn');
                        notification.classList.remove('animate__animated');
                        void notification.offsetWidth; // Forzar un reflow para reiniciar las animaciones

                        // Agregar las clases de animación
                        notification.classList.add('animate__fadeIn');
                        notification.classList.add('animate__animated');

                        // Configurar el contenido de la notificación
                        notification.style.display = 'block';
                        notificationText.textContent = 'Enviado Correctamente ✔️ ';

                        // Ocultar la notificación después de 5 segundos
                        setTimeout(() => {
                            notification.style.display = 'none';
                        }, 5000);
                    }
function openModalForm() {
    var modalForm = document.getElementById("modalForm");
    modalForm.style.display = "block";
    modalForm.classList.add("show");

    // Según el valor de count, se agrega la cantidad al input cantidad
    var count = document.getElementById("count").innerText;
    var cantidad = modalForm.querySelector("#cantidad");
    var producto = modalForm.querySelector("#producto");
    producto.value = "WPC WALLPANEL";
    cantidad.value = count;
}
// Llama a la función para abrir el modal después de 8 segundos
setTimeout(openModalForm, 8000);                    
function enviarButton() {
    var modalForm = document.getElementById("modalForm");
    if (!modalForm) {
        console.log('No se encontró el modal');
        return;
    }
    
    
    // Obtener valores del formulario
    const nombre = modalForm.querySelector("#nombre").value;
    const email = modalForm.querySelector("#email").value;
    //const mensaje = modalForm.querySelector("#mensaje").value;
    const producto = modalForm.querySelector("#producto").value;
    const cantidad = modalForm.querySelector("#cantidad").value;
    const telefono = modalForm.querySelector("#telefono").value;
    var msg1 ="Dale un toque único a tus espacios con nuestro WPC WALL PANEL, el material "+
            "perfecto para diseño interior, decoración y acabados arquitectónicos. 🏡💡"+
            "Descubre la versatilidad y elegancia que tu proyecto merece. ✨👌 ¡Haz de cada "+
            "rincón una obra de arte! 🎨✨  Más información en el flyer adjunto. 📄👀";
    var cierre1 ="🤔 Preguntas o Consultas: \n"+
            "WPC WALL PANEL FLYER ¿Tienes alguna pregunta o necesitas asesoramiento? "+
            "Estamos aquí para guiarte en cada paso. Agradecemos tu elección de TAMI para "+
            "transformar tus espacios. 🌟 ¡Contáctanos para hacer realidad tus ideas! 🚀💬 \n"+
            "Recibe tu asesoría gratis y un descuento exclusivo en las primeras 24h \n"+
            "Para más información sobre el producto, ingrese a nuestra página web  👇👇👇 \n"+
            "https://www.tami-peru.com/views/wpcwallpanel.php";
    var msg2 ="¡Descubre la revolución en diseño y acabados arquitectónicos con nuestro WPC "+
            "WALL PANEL en TAMI! 🌟 Aporta elegancia, resistencia y versatilidad a tus "+
            "espacios. 🏡✨ Transforma tus ideas en realidad con el material perfecto. 🎨👌"+
            "Más detalles en el flyer adjunto. 📄👀";
    var cierre2 ="🤔 Preguntas o Consultas: \n"+
            "WPC WALL PANEL FLYER ¿Necesitas asesoramiento o tienes alguna pregunta? "+
            "Estamos aquí para guiarte en cada paso. Agradecemos tu elección de TAMI para"+
            "dar vida a tus proyectos. 🚀 ¡Contáctanos y haz de tus espacios un reflejo de tu "+
            "estilo único! 💬🌈 \n"+
            "Recibe tu asesoría gratis y un descuento exclusivo en las primeras 24h \n"+
            "Para más información sobre el producto, ingrese a nuestra página web  👇👇👇 \n"+
            "https://www.tami-peru.com/views/wpcwallpanel.php";
    let campos_faltantes = [];
    // Validar los datos del formulario (si los campos estan vacios)
    if (nombre.trim() === "") {
        campos_faltantes.push("Nombre");
    }
    if (email.trim() === "") {
        campos_faltantes.push("Email");
    }
    //if (mensaje.trim() === "") {
    //    campos_faltantes.push("Mensaje");
    //}
    if (cantidad.trim() === "") {
        campos_faltantes.push("Cantidad");
    }
    if (telefono.trim() === "" || telefono.length < 9) {
        campos_faltantes.push("Telefono");
    }

    // Si hay campos faltantes, mostrar un mensaje de error
    if (campos_faltantes.length > 0) {
        alert("Por favor, complete los siguientes campos: " + campos_faltantes.join(", "));
        return;
    }

    // Envía datos al primer archivo (mensajewssp.php) usando AJAX
    $.ajax({
        url: "mensajewssp.php",
        type: "POST",
        data: {
            nombre: nombre,
            email: email,
            telefono: telefono,
            producto: producto,
            cantidad: cantidad,
            //mensaje: mensaje
            msg1: msg1,
            cierre1: cierre1,
            msg2: msg2,
            cierre2: cierre2
        },
        success: function(response) {
            console.log(response);
            // Cierra el modal del formulario con desvanecimiento (Asumiendo que tienes una función closeModalForm implementada)
            mostrarNotificacion();
            closeModalForm();
        },
        error: function(error) {
            console.error("Error al enviar datos al primer archivo:", error);
        }
    });

    // Envía datos al segundo archivo (CotizacionController.php) usando otra solicitud AJAX
    $.ajax({
        url: "../controller/CotizacionController.php", // Ajusta la URL según tu estructura de archivos
        type: "POST",
        data: {
            nombre: nombre,
            email: email,
            telefono: telefono,
            producto: producto,
            cantidad: cantidad,
            //mensaje: mensaje
        },
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error("Error al enviar datos al segundo archivo:", error);
        }
    });
}

function closeModalForm() {
    var modalForm = document.getElementById("modalForm");
    if (modalForm) {
        modalForm.style.display = "none";
        modalForm.classList.remove("show");
    }
}
    // Llamada a la función setUpCounter al final del script
    document.addEventListener("DOMContentLoaded", function() {
    setUpCounter();
    generarModalForm();
    
    const enviarCompraButton = document.getElementById(`enviarCompra`);
    if (enviarCompraButton) {
        enviarCompraButton.addEventListener('click', enviarButton);
    }

});
</script>
</body>
</html>