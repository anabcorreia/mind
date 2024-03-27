<?php
class artigosController {
    private $artigosModel;

    public function __construct($pdo) {

        $this->artigoModel = new ArtigoModel($pdo);
    }

    public function criarArtigo($titulo, $conteudo, $autor) {
        $this->artigoModel->criarArtigo($titulo, $conteudo, $autor);
    }

    public function listarArtigos() {
        return $this->artigoModel->listarArtigos();
    }

    public function exibirListaArtigos() {
        $artigos = $this->artigoModel->listarArtigos();
        include 'C:\xampp\htdocs\mind_saudavel\ADM\app\view\artigos\view.php';
    }

    public function atualizarArtigo($id, $titulo, $conteudo, $autor) {
        $this->artigoModel->atualizarArtigo($id, $titulo, $conteudo, $autor);
    }
    
    public function excluirArtigo ($id) {
        $this->artigoModel->excluirArtigo($id);
    }
}