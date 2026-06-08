<?php

require_once "../app/models/Entrega.php";
require_once "../config/database.php";

class EntregaController {

    public function index() {
        $db = new Database();
        $conn = $db->conectar();

        $entregas = Entrega::listar($conn);
        include "../app/views/entregas.php";
    }

    public function store() {
        $db = new Database();
        $conn = $db->conectar();

        $entrega = new Entrega($_POST['origem'], $_POST['destino']);
        $entrega->salvar($conn);

        header("Location: index.php?rota=entregas");
    }
}
