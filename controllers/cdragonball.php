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
        case "insert":
            $personaje = $body['personaje'];
            $raza = $body['raza'];
            $categoria = $body['categoria'];
            $poderes = $body['poderes'];
        
            $resultado = $DragonBallZ->insert_personaje($personaje, $raza, $categoria, $poderes);
        
            if ($resultado > 0) {
                echo json_encode(["mensaje" => "Inserción correcta"]);
            } else {
                echo json_encode(["mensaje" => "Error al insertar"]);
            }
            break;
        
        break;

    case "update":
        $datos=$DragonBallZ->update_personaje=($body['idpersonaje']($body[]));
        echo json_encode(["Modificar correcto"]);
        break;
    case "delete":
        $datos=$DragonBallZ->delete_personaje=($body['idpersonaje'])
        echo json_encode(["Eliminar correcto"]);
    break;
    
}
?>