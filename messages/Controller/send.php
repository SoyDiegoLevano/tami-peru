<?php
print_r($_POST);
require_once './controllEmail.php';

//require '../libMail/vendor/autoload.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

// include '../Controller/info_desk.php';



$id = $_POST["id_pro"];
$title = $_POST["title"];
$menssage = $_POST["menssage"];
$imagenes_main = json_decode($_POST["imagenes_main"]);

function SendMessage($menssage, $imagenes_main, $title)
{





    $mensaje2 = nl2br($menssage);
    $mensages_main = "
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Ejemplo</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
        @media only screen and (max-width: 600px) {
            table[width=\"70%\"] {
                width: 90% !important; /* Cambia el ancho del contenedor al 90% en dispositivos móviles */
            }
        }
        </style>
    </head>
    <body>
        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
                <td align=\"center\">
                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"background: rgb(228, 236, 237); width: 70%; box-shadow: 1px 2px 3px 2px black;\">
                        <tr>
                            <td align=\"center\">
                                <h1 style=\"color: rgb(20, 20, 18); font-size: 3vw; margin-top: 0;padding: 5%;\">" . $title . "</h1>
                                <p style=\"font-size: 2vw; padding: 5%; text-align: left;\">" . $mensaje2 . "</p>
                                <img src=" . $imagenes_main . " style=\"width: 90%; height: auto;\">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>    
    </html>

    ";

    return $mensages_main;
}

$mesa1 = SendMessage($menssage[0][0], $imagenes_main[0][0], $title[0][0]);
$mesa2 = SendMessage($menssage[1][0], $imagenes_main[1][0], $title[1][0]);
$mesa3 = SendMessage($menssage[2][0], $imagenes_main[2][0], $title[2][0]);


//$name = $_POST["sub"];
$email = $_POST["email"];
//$phone = $_POST["message"];
// $id = $_POST["id_ser"];

$respuesta = mainController::funcionName($title[0][0], $email, $mesa1);
$respuesta2 = mainController::funcionName($title[1][0], $email, $mesa2);
$respuesta3 = mainController::funcionName($title[2][0], $email, $mesa3);
echo $respuesta;
    
        
        
    

        


    /*$token = "instance79397";
    $instance_id= "gc1e82fuaqq7r1s6";
    $client = new UltraMsg\WhatsAppApi($token,$instance_id);*/
