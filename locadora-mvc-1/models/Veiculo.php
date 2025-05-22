<?php
require_once __DIR__ . '/../config/db.php';

class Veiculo {
    private $conn;
    public function __construct() {
        $this->conn = conectar();
    }

    public function listarTodos() {
        return $this->conn->query("SELECT * FROM veiculos");
    }

    public function adicionar($modelo, $marca, $ano, $disponivel) {
        $stmt = $this->conn->prepare("INSERT INTO veiculos (modelo, marca, ano, disponivel) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $modelo, $marca, $ano, $disponivel);
        return $stmt->execute();
    }

    public function buscarPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM veiculos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function atualizar($id, $modelo, $marca, $ano, $disponivel) {
        $stmt = $this->conn->prepare("UPDATE veiculos SET modelo = ?, marca = ?, ano = ?, disponivel = ? WHERE id = ?");
        $stmt->bind_param("ssiii", $modelo, $marca, $ano, $disponivel, $id);
        return $stmt->execute();
    }

    public function excluir($id) {
        $stmt = $this->conn->prepare("DELETE FROM veiculos WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>