<?php
header('Content-Type: application/json');

require_once("../config/conexiones.php");
require_once("../models/mDragonBall.php");
$DragonBallZ = new dragonballz();

$body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["http://localhost/api/controllers/cdragonball.php?opt=GETALL
        "]) {
        case "GETALL":
            $datos = $DragonBallZ->get_personajes();
            echo json_encode($datos);
            break;
        case "GetId":
        case "insert":
            $datos = $DragonBallZ->insert_personaje($body['personaje'], $body['raza'], $body['poderes'], $body['categoria']);
            echo json_encode(["mensaje" => "Inserción correcta"]);
            break;
        case "update":
            $idpersonaje = $body['idpersonaje'];
            $personaje = $body['personaje'];
            $raza = $body['raza'];
            $categoria = $body['categoria'];
            $poderes = $body['poderes'];
            $datos = $DragonBallZ->update_personaje($idpersonaje, $personaje, $raza, $categoria, $poderes);
            echo json_encode(["mensaje" => "Actualización correcta"]);
            break;
        case "delete":
            $idpersonaje = $body['idpersonaje'];
            $datos = $DragonBallZ->delete_personaje($idpersonaje);
            echo json_encode(["mensaje" => "Eliminación correcta"]);
            break;
        default:
            echo json_encode(["error" => "Operación no válida"]);
    }

?>
