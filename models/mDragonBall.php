<?php
require_once("../config/conexiones.php");
require_once("../controllers/cdragonball.php");
require_once("../models/mDragonBall.php");

class dragonballz extends Conectar {
   public function get_personajes() {
    $conectar = parent::Conexion();
    parent::set_names();
    $sql = "SELECT * FROM personajes"; 
    $sql = $conectar->prepare($sql);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
}

public function get_personaje_por_id($idpersonaje) { 
    $conectar = parent::conexion();
    parent::set_names();
    $sql = "SELECT * FROM personajes WHERE idpersonaje = ?"; 
    $sql = $conectar->prepare($sql);
    $sql->bindValue(1, $idpersonaje);
    $sql->execute();
    return $sql->rowCount(); 
}

public function insert_personaje($personaje, $raza, $categoria, $poderes) {
    $conectar = parent::conexion();
    parent::set_names();
    $sql = "INSERT INTO personajes(personaje, raza, categoria, poderes) VALUES(?, ?, ?, ?)"; 
    $sql = $conectar->prepare($sql);
    $sql->bindValue(1, $personaje);
    $sql->bindValue(2, $raza);
    $sql->bindValue(3, $categoria);
    $sql->bindValue(4, $poderes);
    $sql->execute();
    return $conectar->lastInsertId(); 
}

public function update_personaje($personaje, $raza, $categoria, $poderes, $idpersonaje) {
    $conectar = parent::conexion();
    parent::set_names();
    $sql = "UPDATE personajes SET personaje = ?, raza = ?, categoria = ?, poderes = ? WHERE idpersonaje = ?";
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
public function get_personaje_id($idpersonaje){
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM personajes WHERE idpersonaje = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$idpersonaje);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}

public function get_personajes_id($personaje){
        $conectar = parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM personajes WHERE personaje = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$personaje);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}}
