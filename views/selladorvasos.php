<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../public/images/TAMILOGOtransparente.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selladora de Vasos | TAMI</title>
    <meta name=description content="Esta es una descripción breve de tu página web. Puedes proporcionar información sobre el contenido de la página y su propósito.">
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/productosindividuales.css">
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
    <?php include_once "header.php"; ?>
    <main class="p_individual">
        <div class="modal-content">
            <div class="product-details">
                <div class="product-images">
                    <div class="image-container">
                        <img class="principal-img" src="../public/images/catalogo_productos/SELLADORDEVASOS.webp" />
                        <video class="principal-img" src="../public/videos/SELLADORDEVASOS.mp4" style="display:none" controls></video>
                    </div>
                    <div class="product-thumbnails">
                        <img src="../public/images/catalogo_productos/SELLADORDEVASOS.webp" alt="Thumbnail 1" onclick="changeMedia(this)" loading="lazy" />
                        <img src="../public/images/catalogo_productos/SelladorVasos/1_SELLADORADEVASOS.webp" alt="Thumbnail 2" onclick="changeMedia(this)" loading="lazy"/>
                        <img src="../public/images/catalogo_productos/SelladorVasos/2_SELLADORADEVASOS.webp" alt="Thumbnail 3" onclick="changeMedia(this)" loading="lazy"/>
                        <img src="../public/images/catalogo_productos/SelladorVasos/4_PRODUCTO.webp" alt="Thumbnail 4" onclick="changeMedia(this)" loading="lazy"/>
                        <video src="../public/videos/SELLADORDEVASOS.mp4" alt="Thumbnail 5" onclick="changeMedia(this)" loading="lazy"></video>
                        <!-- Agrega más miniaturas aquí según sea necesario -->
                    </div>
                </div>

                <div class="product-info">
                    <h2 class="pro_titulo">Sellador de Vasos</h2>
                    <div class="pro-opinion">
                        <div class="opinion-subcont">
                            <label>Valoración: </label>
                            ★★★☆☆
                        </div>
                        <div class="opinion-subcont">
                            <label>Comentarios: </label>
                            <span>33</span>
                        </div>
                    </div>
                    <div class="detalles">
                        <div class="detalles-subcont">
                            <label>Información: </label>
                            <br>
                            <span>El vaso de plástico se colocará en la parte inferior del molde, después de haber precalentado la máquina, para luego sellarlo con el film de plástico y luego retirar el vaso.</span>
                        </div>
                        <div class="detalles-subcont">
                            <div class="detalles-extra">
                                <b>Modelo:</b> ET-A9 <br>
                                <b>Potencia:</b> 220V / 110V <br>
                                <b>Temperatura de sellado:</b> 160 – 200°C <br>
                                <b>Diámetro de sellado:</b> 9.5 y 7.5 cm <br>
                                <b>Flujo de trabajo:</b> 300 - 400 vasos/h <br>
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
                                    <td>23 cm</td>
                                    <td>32 cm</td>
                                    <td>50 cm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="detalles-subcont">
                            <label>Mayor Información: </label>
                            <br>
                            <a href="contacto.php" class="btn-contactar">Contactar</a>
                            <button id="submitButton_sellador__vasos" class="button" style="display: none;">FINALIZAR</button>
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
                <div id="notification_sellador__vasos" style="display: none;" class="notification">
                    <p id="notification-text_sellador__vasos"></p>
                    <span class="notification__progress"></span>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
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
            document.getElementById(`submitButton_sellador__vasos`).addEventListener('click', () => mostrarNotificacion());
        }

        function mostrarNotificacion() {
            const notification = document.getElementById(`notification_sellador__vasos`);
            const notificationText = document.getElementById(`notification-text_sellador__vasos`);

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
            producto.value = "Sellador de vasos";
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
            var msg1 = "¡Bienvenid@ a TAMI! ¿Te has sentido frustrado/a al intentar sellar tus vasos de"+
            " forma efectiva?  ¿Has experimentado derrames y desperdicios debido a un sellado"+
            " deficiente? ¡No te preocupes más! Tenemos la solución ideal para ti: Nuestra"+
            " selladora de vasos utiliza una tecnología avanzada que garantiza un sellado"+
            " hermético y rápido, agilizando el proceso de envasado. ¡Descubre cómo mejorar la"+
            " calidad y eficiencia de tus productos con nuestra innovadora máquina de sellado! 👀📄";
            var cierre1 ="🤔 Preguntas o Consultas: \n"+
                    "¡No dejes que los problemas de sellado de vasos obstaculicen tu negocio!  \n"+
                    "Contáctanos hoy mismo y descubre cómo nuestra selladora de vasos puede resolver"+
                    " tus problemas de sellado y aumentar la eficiencia de tu negocio. ¡No dejes que los"+
                    " obstáculos en el sellado afecten tu éxito empresarial! 🌟 \n"+
                    "“Asesoria gratis las primeras 24h con un descuento del 10%” \n"+
                    "Sellador de vasos | TAMI (tami-peru.com)";
            var msg2 = "¡Bienvenid@ a TAMI! ¿Has tenido problemas al sellar tus vasos de forma efectiva?"+
            " ¿Te preocupa la calidad de tus productos debido a un sellado deficiente? ¡No te"+
            " preocupes más! En TAMI tenemos la solución perfecta para ti: Nuestro sellador de"+
            " vasos utiliza tecnología de punta para garantizar un sellado hermético y rápido, lo"+
            " que agiliza tu proceso de envasado y asegura la frescura y seguridad de tus"+
            " productos. ¡Descubre cómo nuestra innovadora máquina puede elevar la calidad y"+
            " eficiencia de tu negocio! 👀📄 ";
            var cierre2 = "🤔 Preguntas o Consultas: \n"+
                    "¡No dejes que los problemas de sellado de vasos obstaculicen tu negocio! \n"+
                    "Contáctanos hoy mismo y descubre cómo nuestra selladora de vasos puede resolver"+
                    " tus problemas de sellado y aumentar la eficiencia de tu negocio. ¡No dejes que los"+
                    " obstáculos en el sellado afecten tu éxito empresarial! 🌟 \n"+
                    "“Asesoria gratis las primeras 24h con un descuento del 10%” \n"+
                    "Sellador de vasos | TAMI (tami-peru.com)";

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
                    //mensaje: mensaje,
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