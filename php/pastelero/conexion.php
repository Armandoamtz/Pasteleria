<?php
class conexion {
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->server;dbname=pasteleria", $this->user, $this->pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Falla de conexión" .$e;
        }
    }

    public function ejecutar($sql) {    
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
    
    public function consultar($sql) {
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}
?>