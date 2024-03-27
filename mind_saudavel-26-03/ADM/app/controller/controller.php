<?php
require_once 'C:\xampp\htdocs\mind_saudavel\ADM\app\model\model.php';



class UserController {
    private $userModel;

    public function __construct($pdo) {

        $this->userModel = new UserModel($pdo);
    }

    public function criarUser($nome, $nome_u, $email, $senha, $tipo) {
        $this->userModel->criarUser($nome, $nome_u, $email, $senha, $tipo);
    }

    public function listarUsers() {
        return $this->userModel->listarUsers();
    }

    public function exibirListaUsers() {
        $users = $this->userModel->listarUsers();
        include 'C:\xampp\htdocs\mind_saudavel\ADM\app\view\user\view.php';
    }

    public function atualizarUser($id, $nome, $nome_u, $email, $senha, $tipo) {
        $this->userModel->atualizarUser($id, $nome_u, $nome, $email, $senha, $tipo);
    }
    
    public function excluirUser ($id) {
        $this->userModel->excluirUser($id);
    }
}

class PerguntasController {
    private $perguntasModel;

    public function __construct($pdo) {

        $this->perguntaModel = new PerguntaModel($pdo);
    }

    public function criarPergunta($pergunta, $resposta) {
        $this->perguntaModel->criarPergunta($pergunta, $resposta);
    }

    public function listarPerguntas() {
        return $this->perguntaModel->listarPerguntas();
    }

    public function exibirListaPerguntas() {
        $perguntas = $this->perguntaModel->listarPerguntas();
        include 'C:\xampp\htdocs\mind_saudavel\ADM\app\view\perguntas\view.php';
    }

    public function atualizarPergunta($id, $pergunta, $resposta) {
        $this->perguntaModel->atualizarPergunta($id, $pergunta, $resposta);
    }
    
    public function excluirPergunta ($id) {
        $this->perguntaModel->excluirPergunta($id);
    }
}

class produtosController {
    private $produtosModel;

    public function __construct($pdo) {

        $this->produtoModel = new ProdutoModel($pdo);
    }

    public function criarProduto($nome, $descricao, $preco, $tipo) {
        $this->produtoModel->criarProduto($nome, $descricao, $preco, $tipo);
    }

    public function listarProdutos() {
        return $this->produtoModel->listarProdutos();
    }

    public function exibirListaProdutos() {
        $produtos = $this->produtoModel->listarProdutos();
        include 'C:\xampp\htdocs\mind_saudavel\ADM\app\view\produtos\view.php';
    }

    public function atualizarProduto($id, $nome, $descricao, $preco, $tipo) {
        $this->produtoModel->atualizarProduto($id, $nome, $descricao, $preco, $tipo);
    }
    
    public function excluirProduto ($id) {
        $this->produtoModel->excluirProduto($id);
    }
}

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
?>