<?php
require_once __DIR__ . '/../models/Veiculo.php';

class VeiculoController {
    private $model;

    public function __construct() {
        $this->model = new Veiculo();
    }

    public function listar() {
        $veiculos = $this->model->listarTodos();
        include __DIR__ . '/../views/veiculos/listar.php';
    }

    public function novo() {
        include __DIR__ . '/../views/veiculos/adicionar.php';
    }

    public function salvar($dados) {
        $this->model->adicionar($dados['modelo'], $dados['marca'], $dados['ano'], $dados['disponivel']);
        header("Location: index.php");
    }

    public function editar($id) {
        $veiculo = $this->model->buscarPorId($id);
        include __DIR__ . '/../views/veiculos/editar.php';
    }

    public function atualizar($dados) {
        $this->model->atualizar($dados['id'], $dados['modelo'], $dados['marca'], $dados['ano'], $dados['disponivel']);
        header("Location: index.php");
    }

    public function excluir($id) {
        $this->model->excluir($id);
        header("Location: index.php");
    }
}
?>