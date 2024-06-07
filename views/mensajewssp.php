<?php
// print_r($_POST);
//obtener los datos del post
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
//$mensaje = $_POST['mensaje'];
$producto = $_POST['producto'];
$email = $_POST['email'];
$msg1 = $_POST['msg1'];
$cierre1 = $_POST['cierre1'];
$msg2 = $_POST['msg2'];
$cierre2 = $_POST['cierre2'];
$telefono = str_replace(" ", "", $telefono);
//agregarle el +51 al inicio
$telefono = "+51".$telefono;
//Agregar el token
$clave = "prvhekf3z23bt2bj";
//crear el mensaje 1
$mensajealusuario1 = "¡Hola ".$nombre."! \n". $msg1;
//crear el mensaje 2
$mensajealusuario2 = "¡Hola ".$nombre."! \n". $msg2;
//switch para determinar el link segun el producto
$linkimagen = "";
switch ($producto) {
    case 'Sellador de Botellas':
        $linkimagen="https://i.ibb.co/CQgpQX4/Flyer-Sellador-de-Botellas.webp";
        break;
    case 'Máquina de embalaje':
        $linkimagen="https://i.ibb.co/qMP435v/Flyer-M-quina-de-embalaje.webp";
        break;
    case 'Sellador de vasos':
        $linkimagen="https://i.ibb.co/XLTz0vb/Flyer-Selladora-de-vasos.webp";
        break;
    case 'Selladora de bolsas':
        $linkimagen="https://i.ibb.co/VHyrXQQ/Flyer-Sellador-de-Bolsas.webp";
        break;
    case 'Soldadora LINGBA 5':
        $linkimagen="https://i.ibb.co/dWZHL7J/Flyer-Soldadora-Lingba.webp";
        break;
    case 'Soldadora SPARK 3':
        $linkimagen="https://i.ibb.co/g4LX9ZF/Flyer-Soldadora-Spark.webp";
        break;
    case 'Panel de Fibra de Bambo':
        $linkimagen="https://i.ibb.co/vHsdwh5/Flyer-Bamboo-Fiber-Wallboard.webp";
        break;
    case 'Ventilador Holográfico':
        $linkimagen="https://i.ibb.co/44S7Xv7/Flyer-Ventilador-Hologr-fico.webp";
        break;
    case 'WPC FENCEPANEL':
        $linkimagen="https://i.ibb.co/84HZqz1/Flyer-WPC-Fence-Panel.webp";
        break;
    case 'WPC WALLPANEL':
        $linkimagen="https://i.ibb.co/hWZmvpk/Flyer-WPC-Wall-Panel.webp";
        break;
    case 'Maquina de Concreto':
        $linkimagen="https://i.ibb.co/68YwTzY/Flyer-Mezcladora-de-Concreto.webp";
        break;
    default:
        $linkimagen="https://file-example.s3-accelerate.amazonaws.com/images/test.jpg";
        break;
}

/*
$imgPath = 'temp_image.webp'; // Nombre del archivo temporal
file_put_contents($imgPath, file_get_contents($linkimagen));


// Configuración de PHPMailer
$mail = new PHPMailer(true);
try {
    // Configuración del servidor SMTP
    //informestami01@gmail.com
    $mail->isSMTP();
    $mail->Host       = 'gestion.contigo-voy.com'; // Cambia esto con la dirección de tu servidor SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'gestioncontigovoy@gestion.contigo-voy.com';   // Cambia esto con tu correo SMTP
    $mail->Password   = '}qlC%A.frc3?'; // Cambia esto con tu contraseña SMTP
    $mail->SMTPSecure = 'ssl';  // Puedes usar 'ssl' o 'tls'
    $mail->Port       = 465;    // Puerto SMTP

    // Configuración del remitente y destinatario
    $mail->setFrom('tamiperu@tami-peru.com', 'Tami Perú');
    $mail->addAddress($email, $nombre);

    // Configuración del contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Información del producto: ' . $producto;
    $mail->Body    = $mensajealusuario . '<br><img src="' . $linkimagen . '" alt="' . $producto . '">';
    $mail->AltBody = $mensajealusuario; // Texto sin formato HTML

    // Adjuntar la imagen al correo
    $mail->addAttachment($imgPath, 'flyer.jpg');

    // Enviar el correo
    $mail->send();

    echo 'Correo enviado correctamente.';
} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}
*/

//enviar el mensaje

// function enviarMenajeWssp($params){
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "https://api.ultramsg.com/instance72853/messages/image",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 30,
//       CURLOPT_SSL_VERIFYHOST => 0,
//       CURLOPT_SSL_VERIFYPEER => 0,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "POST",
//       CURLOPT_POSTFIELDS => http_build_query($params),
//       CURLOPT_HTTPHEADER => array(
//         "content-type: application/x-www-form-urlencoded"
//       ),
//     ));

//     $response = curl_exec($curl);
//     $err = curl_error($curl);
    
//     curl_close($curl);
    
//     if ($err) {
//       echo "cURL Error #:" . $err;
//     } else {
//       echo $response;
//     }

// }

// //Enviar mensaje 1
// $params1 = array(
//     'token' => 'prvhekf3z23bt2bj',
//     'to' => '%2B51900265655',
//     'image' => $linkimagen,
//     'caption' => $mensajealusuario1."\n".$cierre1,
// );

// enviarMenajeWssp($params1);

// //Esperar para mandar el siguiente mensaje
// sleep(10);

// //Enviar mensaje 2
// $params2 = array(
//     'token' => 'prvhekf3z23bt2bj',
//     'to' => '%2B51900265655',
//     'image' => $linkimagen,
//     'caption' => $mensajealusuario2."\n".$cierre2,
// );

// enviarMenajeWssp($params2);

//Usar Api ultramsg para enviar mensajes
// $params=array(
//     'token' => 'prvhekf3z23bt2bj',
//     'to' => $telefono,
//     'body' => $mensajealusuario1
//     );
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "https://api.ultramsg.com/instance78379/messages/chat",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 30,
//       CURLOPT_SSL_VERIFYHOST => 0,
//       CURLOPT_SSL_VERIFYPEER => 0,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "POST",
//       CURLOPT_POSTFIELDS => http_build_query($params),
//       CURLOPT_HTTPHEADER => array(
//         "content-type: application/x-www-form-urlencoded"
//       ),
//     ));
    
//     $response = curl_exec($curl);
//     $err = curl_error($curl);
    
//     curl_close($curl);
    
//     if ($err) {
//       echo "cURL Error #:" . $err;
//     } else {
//       echo $response;
//     }

// //Usar Api ultramsg para enviar mensajes con imagenes

// $params=array(
//     'token' => 'prvhekf3z23bt2bj',
//     'to' => '%2B51900265655',
//     'image' => $linkimagen,
//     'caption' =>$cierre1
//     );
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "https://api.ultramsg.com/instance78379/messages/image",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 30,
//       CURLOPT_SSL_VERIFYHOST => 0,
//       CURLOPT_SSL_VERIFYPEER => 0,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "POST",
//       CURLOPT_POSTFIELDS => http_build_query($params),
//       CURLOPT_HTTPHEADER => array(
//         "content-type: application/x-www-form-urlencoded"
//       ),
//     ));
    
//     $response = curl_exec($curl);
//     $err = curl_error($curl);
    
//     curl_close($curl);
    
//     if ($err) {
//       echo "cURL Error #:" . $err;
//     } else {
//       echo $response;
//     }
    

//enviar por correo


// Función para enviar mensajes
function enviarMensajes($token, $to, $image = null, $body = null, $caption = null) {
    $params = array(
        'token' => $token,
        'to' => $to
    );

    if ($image !== null) {
        $params['image'] = $image;
        $params['caption'] = $caption;
        $url = "https://api.ultramsg.com/instance78379/messages/image";
    } else {
        $params['body'] = $body;
        $url = "https://api.ultramsg.com/instance78379/messages/chat";
    }

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}

// Enviar primer conjunto de mensajes
enviarMensajes($clave, $telefono, null, $mensajealusuario1);

// Enviar segundo conjunto de mensajes
enviarMensajes($clave, $telefono, $linkimagen, null, $cierre1);

// Esperar 10 minutos antes de enviar el segundo conjunto de mensajes
// $tiempoEspera = 1; // Convertir 10 minutos a segundos
// $tiempoInicio = time();
// while (time() - $tiempoInicio < $tiempoEspera) {
//     // Esperar
// }

// Enviar primer conjunto de mensajes
enviarMensajes($clave, $telefono, null, $mensajealusuario2);

// Enviar segundo conjunto de mensajes
enviarMensajes($clave, $telefono, $linkimagen, null, $cierre2);


?>