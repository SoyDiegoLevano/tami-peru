<?php
print_r($_POST);
require_once './controllEmail.php';

//require '../libMail/vendor/autoload.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include '../Controller/info_desk.php';

$id= $_POST["id_ser"];

if(isset($_POST["service"])){
    $trol = $_POST["service"];
    switch ($trol) {
        case "0":
            $id = 1;
            break;
        case "1":
            $id = 2;
            break;
        case "2":
            $id = 3;
            break;
        case "3":
            $id = 4;
            break;
        case "4":
            $id = 5;
            break;
        case "5":
            $id = 6;
            break;
        case "6":
            $id = 7;
            break;
        case "7":
            $id = 8;
            break;
        case "8":
            $id = 9;
    }
}
$mesa1 = SendMessage($menssage[0][$id-1],$imagenes_main[0][$id-1],$title[0][$id-1]);
$mesa2 = SendMessage($menssage[1][$id-1],$imagenes_main[1][$id-1],$title[1][$id-1]);
$mesa3 = SendMessage($menssage[2][$id-1],$imagenes_main[2][$id-1],$title[2][$id-1]);

    
        //$name = $_POST["sub"];
$email = $_POST["email"];
        //$phone = $_POST["message"];
       // $id = $_POST["id_ser"];
        
$respuesta = mainController::funcionName($title[0][$id-1],$email,$mesa1);
$respuesta2 = mainController::funcionName($title[1][$id-1],$email,$mesa2);
$respuesta3 = mainController::funcionName($title[2][$id-1],$email,$mesa3);
echo $respuesta;
    
        
        
    

        


    /*$token = "instance79397";
    $instance_id= "gc1e82fuaqq7r1s6";
    $client = new UltraMsg\WhatsAppApi($token,$instance_id);*/



    