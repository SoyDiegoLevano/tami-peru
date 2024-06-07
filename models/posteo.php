<?php
require_once '../connection/conexion.php';

class PosteoModel {
    private $conn;

    public function __construct() {
        $this->conn = conexion();
    }

    public function get() {
        $consulta = $this->conn->prepare("SELECT * FROM posting_blog");
        $consulta->execute();
        if ($consulta) {
            $resultado = $consulta->get_result()->fetch_all(MYSQLI_ASSOC);
            return $resultado;
        }
        return false;
    }

    public function getMost($id) {

        $consulta = $this->conn->prepare("SELECT * FROM posting_blog WHERE id = ?");
        $consulta->bind_param("i", $id);
        $consulta->execute();

        if ($consulta) {
            $resultado = $consulta->get_result()->fetch_all(MYSQLI_ASSOC);
            return $resultado;
        }
        return false;
    }


    

    public function add($titulo, $contenido, $link, $fecha) {
        $consulta = $this->conn->prepare('INSERT INTO posting_blog (titulo, contenido, link, fecha) VALUES (?, ?, ?, ?)'); 
        $consulta->bind_param("ssss", $titulo, $contenido, $link, $fecha);
        $result = $consulta->execute();
        
        if ($result) {
            return $this->conn->insert_id;
        }
        return false;
    }

    public function update($titulo, $contenido, $link, $id) {
        $consulta = $this->conn->prepare('UPDATE posting_blog SET titulo = ?, contenido = ?, link = ? WHERE id = ?'); 
        $consulta->bind_param("sssi", $titulo, $contenido, $link, $id);
        $result = $consulta->execute();

        if ($result) {
            return $consulta->affected_rows > 0;
        }
        
        return false;
    }

    public function delete($id) {
        $consulta = $this->conn->prepare("DELETE FROM posting_blog WHERE id = ?");
        $consulta->bind_param("i", $id);
        $result = $consulta->execute();

        if ($result) {
            return $consulta->affected_rows > 0;
        }
        return false;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>