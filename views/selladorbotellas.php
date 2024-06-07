<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../public/images/TAMILOGOtransparente.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellador de botellas | TAMI</title>
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
                        <img class="principal-img" src="../public/images/catalogo_productos/SELLADORDEBOTELLAS.webp" />
                        <video class="principal-img" src="../public/videos/SELLADORDEBOTELLAS.mp4" style="display:none" controls></video>
                    </div>
                    <div class="product-thumbnails">
                        <img src="../public/images/catalogo_productos/SELLADORDEBOTELLAS.webp" alt="Thumbnail 1" onclick="changeMedia(this)" />
                        <img src="../public/images/catalogo_productos/SelladorBotellas/2_SELLADORDEBOTELLAS.webp" alt="Thumbnail 2" onclick="changeMedia(this)" />
                        <img src="../public/images/catalogo_productos/SelladorBotellas/3_SELLADORDEBOTELLAS.webp" alt="Thumbnail 3" onclick="changeMedia(this)" />
                        <img src="../public/images/catalogo_productos/SelladorBotellas/4_PRODUCTO.webp" alt="Thumbnail 4" onclick="changeMedia(this)" />
                        <video src="../public/videos/SELLADORDEBOTELLAS.mp4" alt="Thumbnail 5" onclick="changeMedia(this)"></video>
                        <!-- Agrega más miniaturas aquí según sea necesario -->
                    </div>
                </div>

                <div class="product-info">
                    <h2 class="pro_titulo">Sellador de Botellas</h2>
                    <div class="pro-opinion">
                        <div class="opinion-subcont">
                            <label>Valoración: </label>
                            ★★★★☆
                        </div>
                        <div class="opinion-subcont">
                            <label>Comentarios: </label>
                            <span>44</span>
                        </div>
                    </div>
                    <div class="detalles">
                        <div class="detalles-subcont">
                            <label>Información: </label>
                            <br>
                            <span>Utiliza el principio de inducción electromagnética para producir un alto calor instantáneo para derretir el papel de aluminio que luego se adhiere al agujero de la Botella.</span>
                        </div>
                        <div class="detalles-subcont">
                            <div class="detalles-extra">
                                <b>Modelo:</b> DCGY-F200 <br>
                                <b>Potencia:</b> AC220V/50HZ-80HZ<br>
                                <b>Temperatura ambiente:</b> 10 - 400 °C<br>
                                <b>Diámetro del sello:</b> 2 - 8 (cm)<br>
                                <b>Flujo de trabajo:</b> 25 Botellas/min<br>
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
                                    <td>28 cm</td>
                                    <td>23 cm</td>
                                    <td>11.5 cm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="detalles-subcont">
                            <label>Mayor Información: </label>
                            <br>
                            <a href="contacto.php" class="btn-contactar">Contactar</a>
                            <button id="submitButton_Sellador-de-botellas" class="button" style="display: none;">FINALIZAR</button>
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
                        <button class="btn-cotiza" onclick="openModalForm()">Cotizar</button>
                    </div>
                </div>
            </div>

            <div style="width: 100%; color: #7B7C89;">
                <div id="notification_Sellador-de-botellas" style="display: none;" class="notification">
                    <p id="notification-text_Sellador-de-botellas"></p>
                    <span class="notification__progress"></span>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <script src="../public/js/mensajes-wsp.js"></script> -->
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
            <form id="miFormulario"  method="POST">
                <div class="form-row">
                    <div class="form-column">
                        <input type="text" name="nombre" id="nombre" required placeholder="Nombre" required>
                        <input type="email" name="email" id="email" required placeholder="Correo Electrónico" required>
                        <input type="number" name="telefono" id="telefono" required placeholder="Número telefónico" required>
                        <input type="hidden" value="1" name="id_pro" id="id_pro" hidden />
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
            document.getElementById(`submitButton_Sellador-de-botellas`).addEventListener('click', () => mostrarNotificacion());
        }

        function mostrarNotificacion() {
            const notification = document.getElementById(`notification_Sellador-de-botellas`);
            const notificationText = document.getElementById(`notification-text_Sellador-de-botellas`);

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
            producto.value = "Sellador de Botellas";
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
            const id_pro = modalForm.querySelector("#id_pro").value;
            const nombre = modalForm.querySelector("#nombre").value;
            const email = modalForm.querySelector("#email").value;
            const telefono = modalForm.querySelector("#telefono").value;

            // const mensaje = modalForm.querySelector("#mensaje").value;
            const producto = modalForm.querySelector("#producto").value;
            const cantidad = modalForm.querySelector("#cantidad").value;

            var msg1 = "¡Bienvenid@ a TAMI! ¿Te sientes frustrado/a al tratar de sellar tus bolsas de manera" +
                " efectiva y rápida? ¿Has experimentado derrames y desperdicios debido a un sellado" +
                " deficiente? ¡No te preocupes más! Tenemos la solución perfecta para ti: Nuestra" +
                " máquina utiliza una tecnología de doble sellado que garantiza un cierre hermético y" +
                " rápido agilizando el proceso de sellado. Más detalle 👀📄";
            var cierre1 = "🤔 Preguntas o Consultas: \n" +
                "¡No permitas que los desafíos en el sellado de botellas afecten el rendimiento de tu empresa! \n" +
                "¡Comunícate con nosotros hoy mismo y descubre cómo nuestra selladora puede potenciar tu proceso de fabricación" +
                " y optimizar la eficacia de tu producción! 🌟 \n" +
                "Para más información sobre el producto, ingrese a nuestra página web  👇👇👇" +
                "“¡Asesoria gratis las primeras 24h con un descuento especial!” \n" +
                "Sellador de botellas | TAMI (tami-peru.com)";
            var msg2 = "Te damos la bienvenid@ a TAMI. ¿Has tenido problemas con fugas o deterioro del" +
                " sellado en tus botellas? Nuestra máquina garantiza un sellado perfecto en cada" +
                " botella, manteniendo la frescura y la calidad de tus productos. ¡Sellado que protege" +
                " de la contaminación exterior y la oxidación, asegurando tus productos en su máximo esplendor.";
            var cierre2 = "🤔 Preguntas o Consultas: \n" +
                "¡No dejes que los problemas de sellado de botellas obstaculicen tu negocio! \n" +
                "Contáctanos hoy para obtener más información sobre cómo nuestra máquina" +
                " selladora puede mejorar tu proceso de producción y aumentar tu eficiencia 🌟 \n" +
                "“¡Asesoria gratis las primeras 24h con un descuento especial del 10%!” \n" +
                "Sellador de botellas | TAMI (tami-peru.com)";

            const imagenes_main = [
                ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj72Ga0skRjXoSA4lfHicy1rVJ0kd5DcCKq7Tj8LAhtap-6L4lrRsnoD85TRihXDx1OWE3BdIhRz1j5IJEidAzv1du5Ya5VQBLBAxuGEG9xuK6v4gjpP9jB3dA6otzZXV3j1vxXkdvrpto8i2l3HtzNjmaTWaeX_-Mb0G6jGCifbxBt5Jzyr_fEoZgL7xhQ/s16000/flyer-modal-1-1.jpg"],
                ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_C0U0tfOZT92qeRr10AXjBfv2vytcekdRjiS_5lVJWii7PQ8Re6Pmi1sGX8K1FPyLO1KHS2txlW_2QP4AoCXWr6HEE6KEPLZriUVAubZnD-g4TS5PHDxXnOuBDyk06r5hEd0_koX0Wgaz5upF_fp1hAeRGwDkHCLP03dAM8Wf-01GhZ8Xp-KYFCrBuImA/s16000/flyer-modal-2-2.jpg"],
                ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvG2owRjMlCU0lJuon4pDZhNj6-VsJIIDoHCFcTWyQAy7srnlkRxXJjoTB6eCQHXauDqLOeJ2VcJ6F6-5SiuoCBLcZvTpfPu3UQcg53yJmdKGaJqa-zJQTYptfztA1bpJgPzGNi_aP2BA2qpZ809flOkxkmA7rxZlE-jI87UhJtc8c2BQnUj_UeoSikvxj/s16000/flyer-modal-3-3.jpg"],
            ];

            const title = [
                ["¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA! 🌐"],
                ["¡FORTALECE TU PRESENCIA EN LÍNEA 💻!"],
                ["¡MAXIMIZA TU PRESENCIA ONLINE! 💻 "]
            ];

            const menssage = [
                ["¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA! 🌐"],
                ["¡FORTALECE TU PRESENCIA EN LÍNEA 💻!"],
                ["¡MAXIMIZA TU PRESENCIA ONLINE! 💻 "]
            ];


            let campos_faltantes = [];
            // Validar los datos del formulario (si los campos estan vacios)
            if (nombre.trim() === "") {
                S
                campos_faltantes.push("Nombre");
            }
            if (email.trim() === "") {
                campos_faltantes.push("Email");
            }
            // if (mensaje.trim() === "") {
            //     campos_faltantes.push("Mensaje");
            // }
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
                url: "../messages/Controller/send.php",
                type: "POST",
                data: {
                    id_pro: id_pro,
                    email: email,
                    imagenes_main: JSON.stringify(imagenes_main),
                    title: title,
                    menssage: menssage

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
                    // mensaje: mensaje
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