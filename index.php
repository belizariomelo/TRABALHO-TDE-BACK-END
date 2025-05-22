<?php
require 'db.php'; 


$sql = "SELECT * FROM veiculos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Veículos</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <h1>Veículos Cadastrados</h1>
    <a href="adicionar.php">Adicionar Veículo</a> 

    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Disponível</th> 
            <th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?> 
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['modelo'] ?></td>
            <td><?= $row['marca'] ?></td>
            <td><?= $row['ano'] ?></td>
            <td><?= $row['disponivel'] ? 'Sim' : 'Não' ?></td>
            <td>
              
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="deletar.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>