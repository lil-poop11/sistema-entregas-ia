<?php

class Entrega {
    private $origem;
    private $destino;

    public function __construct($origem, $destino) {
        $this->origem = $origem;
        $this->destino = $destino;
    }

    public function salvar($conn) {
        $sql = "INSERT INTO entregas (origem, destino) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->origem, $this->destino]);
    }

    public static function listar($conn) {
        $sql = "SELECT * FROM entregas";
        return $conn->query($sql);
    }
}
