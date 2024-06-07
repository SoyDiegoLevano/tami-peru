<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/animejs"></script>

    <link rel="stylesheet" href="styles.css">
</head>
<style>
    html{
        width: 100%;
    }
    body {
        width: 90%;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #398F8D;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fffcec;
        border-radius: 8px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        overflow: clip;
        width: 90%;
        padding: 35px;

    }

    .login-form {
        width: 100%;
        /*padding: 30px;*/
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .input-container {
        position: relative;
        margin-bottom: 20px;


        display: flex;
    align-items: center;
    }
    .usuarioimg {
    width: 20px; 
    height: 20px;
    background-image: url('../public/images/usuario.webp');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    left: 10px; 
    top: 50%; 
    transform: translateY(-50%);
    z-index: 1; /* Coloca la imagen encima del input */
}
.seguroimg {
    width: 20px; 
    height: 20px; 
    background-image: url('../public/images/seguro.webp');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    left: 10px; 
    top: 50%; 
    transform: translateY(-50%);
    z-index: 1;
}



    label {
        position: absolute;
        top: 16px;
        left: 10px;
        color: #333;
        pointer-events: none;
        transition: 0.3s ease-out;
    }

    input:focus+label,
    input:not(:placeholder-shown)+label {
        top: -10px;
        font-size: 14px;
        color: #398F8D;
    }

    input {
    width: calc(100% - 20px);
    padding: 12px;
    border: 1px solid #398F8D;
    outline: none;
    border-radius: 20px;
    position: relative; 
    left: -5px; 
}
    button {
    width: 100%;
    padding: 12px;
    background-color: #398F8D;
    color: #FFFFFF;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}
    button:hover {
        background-color: #306E6C;
    }

   img{
    width: 35%;
    height: 35%;
   }
   #username_or_email::placeholder {
    color: black; 
    }
    #password::placeholder {
    color: black;
    }

</style>

<body> 
    <div class="contenedor" style="text-align: center;">

    <div class="login-container">
    <form class="login-form" method="post" action="../models/procesar_loguin.php">
    <img src="../public/images/TAMILOGOtransparente21.webp" class="logo"alt="">
        <div class="input-container">
            <input type="text" name="username_or_email" id="username_or_email" required placeholder="       Usuario">
            <label for="username_or_email"></label>
            <span class="usuarioimg"></span>
        </div>
        <div class="input-container" style="display: none;">
            <input type="email" name="email" id="email">
            <label for="email">Correo Electrónico</label>
        </div>
        <div class="input-container">
            <input type="password" name="password" id="password" required placeholder="       Contraseña">
            <span class="seguroimg"></span>
            <label for="password"></label>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>
   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
  // Obten el elemento del formulario
  var loginContainer = document.querySelector('.contenedor');

  // Configura la animación con Anime.js
  anime({
    targets: loginContainer,
    translateY: [-90, 0],
    opacity: [0, 1],
    easing: 'easeOutExpo',
    duration: 2000,
    delay: 500
  });
});
//Quitar el usuarioimg cuando se escriba
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('username_or_email');
    var usuarioimg = document.querySelector('.usuarioimg');

    input.addEventListener('input', function () {
        if (input.value.length > 0) {
            usuarioimg.style.display = 'none';
        } else {
            usuarioimg.style.display = 'block';
        }
    });
});
//Quitar la seguroimg cuando se escriba
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('password');
    var seguroimg = document.querySelector('.seguroimg');

    input.addEventListener('input', function () {
        if (input.value.length > 0) {
            seguroimg.style.display = 'none';
        } else {
            seguroimg.style.display = 'block';
        }
    });
});
</script>
</html>