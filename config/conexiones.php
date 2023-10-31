<?php 
class Conectar {
    protected $dbh;
    protected function Conexion() {
        try {
            $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=dragoballz", "root", "");
            return $conectar;
        } catch (PDOException $error) {
            print 'Error en la BD: ' . $error->getMessage() . "<br>";
            die();
        }
    }

    public function set_names() {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}

