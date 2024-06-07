    //section blog
    const htmlBlog = document.getElementById('sectionBlog');

    //lista de imagenes
    const list_img = ['./public/img/img-blog/blog-1.jpg','./public/img/img-blog/blog-2.jpg',
    './public/img/img-blog/blog-3.jpg','./public/img/img-blog/blog-4.jpg',
    './public/img/img-blog/blog-5.jpg','./public/img/img-blog/blog-6.jpg',
    './public/img/img-blog/blog-7.jpg','./public/img/img-blog/blog-8.jpg',
    './public/img/img-blog/blog-9.jpg','./public/img/img-blog/blog-10.jpg'
    ]

    //funcion, mostrar el contenido de la bd al blog , especificamente dentro del section blog
    const dataSee = () => {
        fetch('./app/trigger/posteo.php?action=GETB')
            .then((res) => res.json())
            .then((Data) =>{
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
                    intervalo ++;
                    //repetir imagen una vez llegado a 10 blog section
                    if(intervalo >= 10){
                        intervalo = 0;
                    }
                
                
                });
                
            })

        
    }
    dataSee();