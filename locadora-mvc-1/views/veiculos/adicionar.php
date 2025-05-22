<?php include __DIR__ . '/../layout/header.php'; ?>
<h1>Adicionar Veículo</h1>
<form method="post" action="index.php?acao=salvar">
    <input type="text" name="modelo" placeholder="Modelo" required>
    <input type="text" name="marca" placeholder="Marca" required>
    <input type="number" name="ano" placeholder="Ano" required>
    <label>Disponível:
        <select name="disponivel">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </label>
    <input type="submit" value="Salvar">
</form>