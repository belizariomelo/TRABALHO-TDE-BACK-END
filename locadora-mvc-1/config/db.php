<?php
function conectar() {
    $conn = new mysqli("localhost", "root", "", "locadora");
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    return $conn;
}
?>