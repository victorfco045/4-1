<?php
header('Content-Type: application/json');

require_once("../config/conexiones.php");
require_once("../models/mDragonBall.php");
$DragonBallZ = new dragonballz();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["opt"]) {
    case "GETALL":
        $datos = $DragonBallZ->get_personajes();
        echo json_encode($datos);
        break;
    case "GetId":
        $datos = $DragonBallZ->insert_personaje($body['personaje'], $body['raza'], $body['poderes'], $body['categoria']);
        echo json_encode(["insert correcto"]);
        break;
    case "insert":
        $datos = $DragonBallZ->insert_personaje($body['idpersonaje'],$body['personaje'], $body['raza'], $body['poderes'], $body['categoria']);
        echo json_encode(["insert correcto"]);
        break;
    case "update":
            $datos = $DragonBallZ->update_personaje($idpersonaje, $personaje, $raza, $categoria, $poderes);
            echo json_encode(["Eliminar correcto"]);
        break;
    case "delete":
        $datos = $DragonBallZ->delete_personaje($idpersonaje);
        echo json_encode(["Eliminar correcto"]);
    break;
    
}
?>