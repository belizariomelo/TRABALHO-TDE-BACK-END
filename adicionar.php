<?php
require 'db.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $disponivel = isset($_POST['disponivel']) ? 1 : 0;


    $sql = "INSERT INTO veiculos (modelo, marca, ano, disponivel) VALUES ('$modelo', '$marca', $ano, $disponivel)";
    $conn->query($sql);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Veículo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Adicionar Veículo</h1>
    <form method="post">
    
        Modelo: <input type="text" name="modelo" required><br>
        Marca: <input type="text" name="marca" required><br>
        Ano: <input type="number" name="ano" required><br>
        Disponível: <input type="checkbox" name="disponivel"><br>
        <div class="final">
        <input type="submit" value="Adicionar">
        
         <a href="index.php">Voltar</a>
         </div>
    </form>
   
</body>
</html>