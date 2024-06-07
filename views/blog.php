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

        </section>
    </main>
    <?php include_once "footer.php"; ?>


    <script>
        //section blog
        const htmlBlog = document.getElementById('sectionBlog');

        //lista de imagenes
        const list_img = ['../public/images/img-blog/blog-1.jpg', '../public/images/img-blog/blog-2.jpg',
            '../public/images/img-blog/blog-3.jpg', '../public/images/img-blog/blog-4.jpg',
            '../public/images/img-blog/blog-5.jpg', '../public/images/img-blog/blog-6.jpg',
            '../public/images/img-blog/blog-7.jpg', '../public/images/img-blog/blog-8.jpg',
            '../public/images/img-blog/blog-9.jpg', '../public/images/img-blog/blog-10.jpg'
        ]

        //funcion, mostrar el contenido de la bd al blog , especificamente dentro del section blog
        const dataSee = () => {
            fetch('../trigger/posteo.php?action=GET')
                .then((res) => res.json())
                .then((Data) => {
                    let intervalo = 0;
                    //iterar de la Lista , dupla, etc, con foreach 
                    Data.forEach(data => {
                        //sumar mostrar cada Secmento del codigo , y se muestra
                        // de forma independiente
                        htmlBlog.innerHTML +=
                            `
                <div class="container-blogs">
                    <div class="blogs">
                        <div class="blog">
                            <div class="titulo limited-title">
                                <h3>${data.titulo}</h3>
                            </div>
                            <div class="resumen limited-text">
                                ${data.contenido}
                            </div>
                            <div class="btn-blog">
                                <a href="${data.link}" class="btn-blog">Leer más</a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="img-blogs">
                        <div class="img-blog">
                            <img src="${list_img[intervalo]}" alt="">
                        </div>
                    </div>
                </div>
                `;
                        htmlBlog.innerHTML += '\n';
                        intervalo++;
                        //repetir imagen una vez llegado a 10 blog section
                        if (intervalo >= 10) {
                            intervalo = 0;
                        }

                    });

                })
 
            }
        dataSee();
    </script>

    <!-- <script type="application/javascript" src="../public/js/main.js" async></script> -->
    <!-- <script type="application/javascript" src="../public/js/blog.js" async></script> -->
</body>

</html>