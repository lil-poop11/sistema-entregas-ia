<?php

class Database {
    private $host = "localhost";
    private $db_name = "entregas";
    private $username = "root";
    private $password = "";

    public function conectar() {
        try {
            return new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
