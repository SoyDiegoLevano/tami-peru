<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../public/images/TAMILOGOtransparente.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | TAMI</title>
    <meta name=description content="Esta es una descripción breve de tu página web. Puedes proporcionar información sobre el contenido de la página y su propósito.">
    <link rel="stylesheet" type="text/css" href="../public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/blog.css">
    <meta name="google-site-verification" content="gL9FykkVgDgo2C_D_YokzB_-CSFaBVctYmHBZTISOKw" />
</head>

<body>

    <?php include_once "header.php"; ?>
    <main class="main__blog">
        <section class="hero" loading="lazy">
            <div class="container-hero">
                <div class="hero-text">
                    <h1>BLOG</h1>
                </div>
        </section>

        <section class="section-container-blogs" id="sectionBlog">
            <!-- Primer blog estatico / utilizar toda la clase container-blogs para el bucle -->
            <div class="container-blogs">
                <div class="blogs">
                    <div class="blog">
                        <div class="titulo limited-title">
                            <h3>Titulo del blog</h3>
                        </div>
                        <div class="resumen limited-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus deserunt, dolore modi harum molestias quasi facilis labore laboriosam illo officiis fugiat rerum ex doloremque deleniti aspernatur nemo molestiae provident sequi.
                        </div>
                        <div class="btn-blog">
                            <a href="link-de-la-publicacion" class="btn-blog">Leer más</a>
                        </div>
                    </div>
                </div>

                <!-- Contabilizar las imagenes del 1 al 10, al llegar al 10 repetir desde el 1 -->
                <div class="img-blogs">
                    <div class="img-blog">
                        <img src="../public/images/img-blog/blog-1.jpg" alt="">
                    </div>
                </div>
            </div>

            <!-- Segundo blog estatico / borrar cuando se realice el bucle -->
            <div class="container-blogs">
                <div class="blogs">
                    <div class="blog">
                        <div class="titulo limited-title">
                            <h3>Titulo del blog</h3>
                        </div>
                        <div class="resumen limited-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus deserunt, dolore modi harum molestias quasi facilis labore laboriosam illo officiis fugiat rerum ex doloremque deleniti aspernatur nemo molestiae provident sequi.
                        </div>
                        <div class="btn-blog">
                            <a href="link-de-la-publicacion" class="btn-blog">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="img-blogs">
                    <div class="img-blog">
                        <img src="../public/images/img-blog/blog-2.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="container-blogs">
                <div class="blogs">
                    <div class="blog">
                        <div class="titulo limited-title">
                            <h3>Titulo del blog</h3>
                        </div>
                        <div class="resumen limited-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus deserunt, dolore modi harum molestias quasi facilis labore laboriosam illo officiis fugiat rerum ex doloremque deleniti aspernatur nemo molestiae provident sequs labore laboriosam illo officiis fugiat rerum ex doloremque deleniti aspernatur nemo molestiae provident sequs labore laboriosam illo officiis fugiat rerum ex doloremque deleniti aspernatur nemo molestiae provident sequi.
                        </div>
                        <div class="btn-blog">
                            <a href="link-de-la-publicacion" class="btn-blog">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="img-blogs">
                    <div class="img-blog">
                        <img src="../public/images/img-blog/blog-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "footer.php"; ?>
    <script type="application/javascript" src="../public/js/main.js" async></script>
    <!-- <script type="application/javascript" src="../public/js/blog.js" async></script> -->
</body>

</html>