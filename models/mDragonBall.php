<?php 
class dragonballz extends Conectar {
    public function get_personajes() {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM personajes"; 
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_personaje_por_id($idpersonaje) { 
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM personajes WHERE idpersonaje = ?"; 
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $idpersonaje);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_personaje($personaje, $raza, $categoria, $poderes) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO personajes(personaje, raza, categoria, poderes) VALUES(?, ?, ?, ?)"; // Corregida la consulta SQL
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $personaje);
        $sql->bindValue(2, $raza);
        $sql->bindValue(3, $categoria);
        $sql->bindValue(4, $poderes);
        $sql->execute();
        return $sql->rowCount();
    }

    public function update_personaje($idpersonaje, $personaje, $raza, $categoria, $poderes) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE personajes SET personaje = ?, raza = ?, categoria = ?, poderes = ? WHERE idpersonaje = ?"; // Corregida la consulta SQL
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $personaje);
        $sql->bindValue(2, $raza);
        $sql->bindValue(3, $categoria);
        $sql->bindValue(4, $poderes);
        $sql->bindValue(5, $idpersonaje);
        $sql->execute();
        return $sql->rowCount(); 
    }

    public function delete_personaje($idpersonaje) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "DELETE FROM personajes WHERE idpersonaje = ?"; 
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $idpersonaje);
        $sql->execute();
        return $sql->rowCount(); 
    }
    public function get_personake_id($idpersonaje){
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM personajes WHERE idPersonaje = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$idpersonaje);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_personaje($personaje){
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM personajes WHERE Personaje = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$personaje);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
