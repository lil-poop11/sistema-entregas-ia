<?php

require_once "../app/controllers/EntregaController.php";

$controller = new EntregaController();

$rota = $_GET['rota'] ?? 'home';

switch ($rota) {

    case 'entregas':
        $controller->index();
        break;

    case 'salvar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store();
        }
        break;

    case 'home':
    default:
        include "../app/views/home.php";
        break;
}

?>
