<?php 
require_once './controller/posteo.php';
require_once './models/posteo.php';


$controller = new PosteoController();
$action = isset($_GET['action']) ? $_GET['action'] : null;


if($action == 'ADD'){
    echo json_encode($controller->add());
}
else if($action == 'DELETE'){
    echo json_encode($controller->delete());
}
else if($action == 'UPDATE'){
    echo json_encode($controller->update());
}
else if($action == 'GET'){
    echo json_encode($controller->get());
}
