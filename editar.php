<?php
require 'db.php';


if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id']; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $disponivel = isset($_POST['disponivel']) ? 1 : 0;


    $sql = "UPDATE veiculos SET modelo='$modelo', marca='$marca', ano=$ano, disponivel=$disponivel WHERE id=$id";
    $conn->query($sql);


    header("Location: index.php");
    exit();
}


$sql = "SELECT * FROM veiculos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Veículo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Editar Veículo</h1>
    <form method="post">
        
        Modelo: <input type="text" name="modelo" value="<?= $row['modelo'] ?>" required><br>
        Marca: <input type="text" name="marca" value="<?= $row['marca'] ?>" required><br>
        Ano: <input type="number" name="ano" value="<?= $row['ano'] ?>" required><br>
        Disponível: <input type="checkbox" name="disponivel" <?= $row['disponivel'] ? 'checked' : '' ?>><br>
        <div class="final">
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
        </div>
    </form>
    
</body>
</html>