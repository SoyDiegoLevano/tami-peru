<?php
// Archivo: RegistroController.php

require_once '../models/posteo.php';

class PosteoController {

    private $posteoModel;

    public function __construct() {
        $this->posteoModel = new PosteoModel();
    }

    public function get(){
        return $this->posteoModel->get();
    }

    public function getMost(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        return $this->posteoModel->getMost($id);
    }

    public function add(){
        if(isset($_POST['titulo']) && isset($_POST['contenido']) && isset($_POST['link']) && isset($_POST['fecha'])){
            $titulo = $_POST['titulo'];
            $contenido = $_POST['contenido'];
            $link = $_POST['link'];
            $fecha = $_POST['fecha'];
            
            $respuesta = $this->posteoModel->add($titulo, $contenido, $link, $fecha);
            if($respuesta){
                json_encode(['status' => true, 'message' => 'Datos insertados correctamente']);
            }

        }else{
            $es = "Parametros Incorrectos";
            return json_encode($es);
        }

    }


    public function delete(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        return $this->posteoModel->delete($id);
    }



    public function update(){
        $id     = isset($_POST['id']) ? $_POST['id'] : null;
        $title = isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $contenido = isset($_POST['contenido']) ? $_POST['contenido'] : null;
        $link = isset($_POST['link']) ? $_POST['link'] : null;
        return $this->posteoModel->update($title, $contenido, $link, $id);

    }

}

