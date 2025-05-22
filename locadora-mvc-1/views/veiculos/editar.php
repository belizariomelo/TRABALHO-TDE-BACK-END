<?php include __DIR__ . '/../layout/header.php'; ?>
<h1>Editar Veículo</h1>
<form method="post" action="index.php?acao=atualizar">
    <input type="hidden" name="id" value="<?= $veiculo['id'] ?>">
    <input type="text" name="modelo" value="<?= $veiculo['modelo'] ?>" required>
    <input type="text" name="marca" value="<?= $veiculo['marca'] ?>" required>
    <input type="number" name="ano" value="<?= $veiculo['ano'] ?>" required>
    <label>Disponível:
        <select name="disponivel">
            <option value="1" <?= $veiculo['disponivel'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$veiculo['disponivel'] ? 'selected' : '' ?>>Não</option>
        </select>
    </label>
    <input type="submit" value="Atualizar">
</form>