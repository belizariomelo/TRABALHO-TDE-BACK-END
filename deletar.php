<?php
require 'db.php'; // Conecta com banco


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM veiculos WHERE id=$id";
    $conn->query($sql);
}


header("Location: index.php");
exit();
?>