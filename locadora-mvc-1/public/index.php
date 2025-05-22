<?php
require_once __DIR__ . '/../controllers/VeiculoController.php';

$controller = new VeiculoController();
$acao = $_GET['acao'] ?? 'listar';

switch ($acao) {
    case 'novo':
        $controller->novo();
        break;
    case 'salvar':
        $controller->salvar($_POST);
        break;
    case 'editar':
        $controller->editar($_GET['id']);
        break;
    case 'atualizar':
        $controller->atualizar($_POST);
        break;
    case 'excluir':
        $controller->excluir($_GET['id']);
        break;
    default:
        $controller->listar();
        break;
}
?>