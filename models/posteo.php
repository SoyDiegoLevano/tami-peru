<?php
// Archivo: UsuarioModel.php

require_once '../connection/conexion.php';

class PosteoModel {
    private $conn;

    public function __construct() {
        $this->conn = conexion();
    }

    public function get(){
        $sql = $this->conn->query("SELECT * FROM posting_blog");
        return $sql;
    }

    public function add($titulo, $contenido, $link, $fecha) {
        $consulta = $this->conn->prepare('INSERT posting_blog (tituto, contenido, link, fecha) VALUES titulo = ?, contenido = ?, link = ?. fecha = ?'); 
        $consulta->bind_param("SSSI", $titulo, $contenido, $link, $fecha);
        $result = $consulta->execute();
        if($result){
            $result = $consulta->get_result()->fetch_assoc();
            return $result;
        }
        return false;
    }

    public function update($titulo, $contenido, $link, $id){
        $consulta = $this->conn->prepare('UPDATE posting_blog SET titulo = ?, contenido = ?, link = ? WHERE id = ?'); 
        $consulta->bind_param("SSSI", $titulo, $contenido, $link, $id);
        $result = $consulta->execute();

        if($consulta){
            $result = $consulta->affected_rows > 0;
            return $result;
        }
        
        return false;
    }

    public function delete($id){
        $consulta = $this->conn->prepare("DELETE FROM posting_blog WHERE id = ?");
        $consulta->bind_param("I", $id);
        $result = $consulta->execute();

        if($consulta){
            $result = $consulta->affected_rows > 0;
            return $result;
        }
        return false;
    }


    public function __destruct() {
        $this->conn->close();
    }
}
?>
