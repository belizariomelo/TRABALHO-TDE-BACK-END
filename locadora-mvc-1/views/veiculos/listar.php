<?php include __DIR__ . '/../layout/header.php'; ?>
<h1>Veículos</h1>
<a href="index.php?acao=novo">Novo Veículo</a>
<table>
    <tr><th>ID</th><th>Modelo</th><th>Marca</th><th>Ano</th><th>Disponível</th><th>Ações</th></tr>
    <?php while ($v = $veiculos->fetch_assoc()): ?>
    <tr>
        <td><?= $v['id'] ?></td>
        <td><?= $v['modelo'] ?></td>
        <td><?= $v['marca'] ?></td>
        <td><?= $v['ano'] ?></td>
        <td><?= $v['disponivel'] ? 'Sim' : 'Não' ?></td>
        <td>
            <a href="index.php?acao=editar&id=<?= $v['id'] ?>">Editar</a>
            <a href="index.php?acao=excluir&id=<?= $v['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>