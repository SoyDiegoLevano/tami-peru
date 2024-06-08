<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/contacto.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/post.css">
    <title>.:: TAMI ::.</title>
</head>

<body>
    <?php include_once "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <main>
                    
                    <h1>Seccion: Publicaciones</h1>

                    <!-- Iniciao-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Crear Publicacion
                    </button>
                    <a href="./cotizaciones.php" class="btn btn-success">Regresar a la vista anterior</a>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Crear Publicacion</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form id="form-admin2" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Titulo</label>
                                                        <input type="text" name="title" id="title" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="complement" class="form-label">Contenido</label>
                                                        <textarea type="text" name="complement" id="complement" class="form-control" style="height: 20vh;" required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="link" class="form-label">Link</label>
                                                        <input type="text" name="link" id="link" class="form-control" required>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mb-3 d-flex justify-content-center">
                                                <div class="btn-group" role="group" aria-label="Botones de acción">
                                                    <input type="submit" value="Agregar" name="submit" id="submit1" class="btn btn-primary btn-lg mx-2">
                                                    <input type="submit" value="Cancelar" name="submit" id="submit2" class="btn btn-danger btn-lg mx-2" data-bs-dismiss="modal"> <!-- Agregamos 'data-bs-dismiss="modal"' para cerrar el modal -->
                                                </div>
                                            </div>



                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered "> <!-- Agregamos la clase 'modal-sm' para reducir el tamaño del modal -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="d-flex align-items-center"> <!-- Utilizamos d-flex para hacer que los elementos se comporten como flexbox y align-items-center para alinear verticalmente -->
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">id :</h1>
                                        <p class="mb-0 ms-3 fs-5 inputText">762</p> <!-- Agregamos ms-2 para un pequeño margen a la izquierda -->
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form id="form-admin3" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="title2" class="form-label">Titulo</label>
                                                        <input type="text" name="title2" id="title2" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="complement2" class="form-label">Contenido</label>
                                                        <textarea type="text" name="complement2" id="complement2" class="form-control" style="height: 20vh;" required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="link2" class="form-label">Link</label>
                                                        <input type="text" name="link2" id="link2" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 d-flex justify-content-center">
                                                <div class="btn-group" role="group" aria-label="Botones de acción">
                                                    <input type="submit" value="Modificar" name="submit" id="submit4" class="btn btn-primary btn-lg mx-2">
                                                    <button type="button" class="btn btn-danger btn-lg mx-2" data-bs-dismiss="modal">Cancelar</button> <!-- Cambiamos <input> por <button> y agregamos 'type="button"' -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!-- No tocar-->
                    <div class="content-table">

                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">TITULO</th>
                                    <th scope="col">CONTENIDO</th>
                                    <th scope="col">LINK</th>
                                    <th scope="col">FECHA</th>
                                    <th scope="col">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody"></tbody>
                        </table>

                    </div>
                </main>
            </div>
        </div>
    </div>
    <?php include_once "footer.php"; ?>

    <script>
        const objRegex_lost = {
            pass: /^(?!.*\s).*.{6,}$/,
        }; //resistencia Nazari


        document.addEventListener("DOMContentLoaded", function() {
            dataRender();
            waitToGo();
            waitToGoUpdate();
        });

        function waitToGo() {
            const formMain = document.querySelector("#form-admin2");
            formMain.addEventListener("submit", (e) => {
                console.log("Boton activado");
                e.preventDefault();
                validarData("title", "complement", "link", "ADD");
            });
        }

        function waitToGoUpdate() {
            const formMain = document.querySelector("#form-admin3");
            formMain.addEventListener("submit", (e) => {
                console.log("Boton activado Update");
                e.preventDefault();
                validarData("title2", "complement2", "link2", "UPDATE");
            });
        }

        function validarData(ti, con, lin, tipe) {
            const titulos = document.getElementById(ti);
            const contenidos = document.getElementById(con);
            const links = document.getElementById(lin);
            const idm = document.querySelector(".inputText");

            //var valor = parrafo.textContent;
            //const idm = document.
            //const passTrue = objRegex_lost.pass.test(pasor.value);

            if (titulos.value === "") alert("Agregue un Titulo");

            if (contenidos.value === "") alert("Agregue un contenido");

            if (links.value === "") alert("Coloque un link");



            if (
                titulos.value != "" &&
                contenidos.value != "" &&
                links.value != ""
            ) {
                alert("Todos los campos son correctos." + tipe);
                if (tipe == "ADD") {
                    const now = new Date();

                    const year = now.getFullYear();
                    const month = String(now.getMonth() + 1).padStart(2, '0'); // Los meses van de 0 a 11
                    const day = String(now.getDate()).padStart(2, '0');

                    const hours = String(now.getHours()).padStart(2, '0');
                    const minutes = String(now.getMinutes()).padStart(2, '0');
                    const seconds = String(now.getSeconds()).padStart(2, '0');

                    const formattedDateTime = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                    console.log(formattedDateTime); // Esto mostrará la fecha y hora actual en formato YYYY-MM-DD HH:MM:SS

                    catchDate(titulos, contenidos, links, formattedDateTime, tipe);
                    cleanDate(titulos, contenidos, links);
                } else if (tipe == "UPDATE") {
                    catchDateUp(idm, titulos, contenidos, links, tipe);
                    modificarYCerrarModal();
                }
            }
        }

        function cleanDate(n, u, p, s) {
            n.value = "";
            u.value = "";
            p.value = "";
            s.value = "";
        }

        function catchDate(n, u, p, f, tipe) {
            const body = new FormData();
            body.append("titulo", n.value);
            body.append("contenido", u.value);
            body.append("link", p.value);
            body.append("fecha", f);

            sentDataToServerSide(body, tipe);
        }

        function modificarYCerrarModal() {
            var modal = document.getElementById("staticBackdrop_2");
            var modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        }

        function catchDateUp(i, n, u, p, tipe) {
            const body = new FormData();
            body.append("id", i.textContent);
            body.append("titulo", n.value);
            body.append("contenido", u.value);
            body.append("link", p.value);


            sentDataToServerSide(body, tipe);
        }

        function sentDataToServerSide(form, tipe) {
            fetch(`../trigger/posteo.php?action=${tipe}`, {
                    method: "POST",
                    body: form,
                })
                .then((res) => res.json())
                .then((res) => {
                    dataRender();
                    window.location.reload();
                    console.log(res);
                })
                .catch((err) => console.log(err));
        }

        const tableBody = document.getElementById("tableBody");

        tableBody.addEventListener("click", (e) => {
            const button = e.target.closest("button");

            if (button) {
                const tr = button.closest("tr");

                const id = tr.getAttribute("data-id");
                const action = button.getAttribute("data-action");

                if (action == "eliminar") {
                    let condicion = confirm("Desea Continuar?");
                    if (condicion) {
                        tr.remove();

                        fetch(`../trigger/posteo.php?action=DELETE&id=${id}`)
                            .then((res) => res.json())
                            .then(console.log);
                    }
                }
            }
        });
        const dataRender = () => {
            fetch("../trigger/posteo.php?action=GET")
                .then((res) => res.json())
                .then((Data = []) => {
                    tableBody.innerHTML = Data.map((data) => {
                        return `
                    <tr data-id="${data.id}">
                        <td>${data.id}</td>
                        <td>${data.titulo}</td>
                        <td>${data.contenido}</td>
                        <td>${data.link}</td>
                        <td>${data.fecha}</td>
                        <td><button data-action="eliminar" class="btnEliminar"  style="border:none;margin-right:10px;color:red;" aria-describedby="eliminar"><i class="bi bi-trash-fill"></i></button>

                        <button data-action="editar" type="button" class="btn mb-3 btnEditar btn-show" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2" style="border:none;margin-top:10px;color:aqua;" aria-describedby="editar"><i class="bi bi-pencil"></i></td>
                    </tr>
                `;
                    }).join("");


                    document.querySelectorAll(".btnEditar").forEach((btn) => {
                        btn.addEventListener("click", () => {
                            // Lógica para editar la fila
                            const rowId = btn.closest("tr").getAttribute("data-id");
                            console.log(rowId);
                            const bodyFats = new FormData();
                            bodyFats.append("id", rowId);
                            fetch("../trigger/posteo.php?action=Mostrar", {
                                    method: "POST",
                                    body: bodyFats,
                                })
                                .then((res) => res.json())
                                .then((data) => {
                                    const userData = data[0];
                                    const ids = document.querySelector(".inputText");
                                    const titu = document.getElementById("title2");
                                    const conte2 = document.getElementById("complement2");
                                    const link2 = document.getElementById("link2");


                                    ids.textContent = userData.id;
                                    titu.value = userData.titulo;
                                    conte2.value = userData.contenido;
                                    link2.value = userData.link;

                                })
                                .catch((error) => {
                                    console.error("Error al obtener los datos:", error);
                                });

                        });
                    });
                });

        };

        dataRender();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>