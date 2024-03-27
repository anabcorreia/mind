<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar user
    public function criarUser($nome, $nome_u, $email, $senha, $tipo) {
        $sql = "INSERT INTO user (nome, nome_u, email, senha, tipo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $nome_u, $email, $senha, $tipo]);
    }


    // Model para listar user
    public function listarUsers() {
        $sql = "SELECT * FROM user";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar user
    public function atualizarUser($id, $nome, $nome_u, $email, $senha, $tipo){
        $sql = "UPDATE user SET nome = ?, nome_u = ?, email = ?, senha = ?, tipo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $nome_u, $email, $senha, $tipo, $id]);
    }
    
    // Model para deletar User
    public function excluirUser($id) {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}

class PerguntaModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar perguntas
    public function criarPergunta($pergunta, $resposta) {
        $sql = "INSERT INTO perguntas (pergunta, resposta) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$pergunta, $resposta]);
    }

    // Model para listar perguntas
    public function listarPerguntas() {
        $sql = "SELECT * FROM perguntas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar perguntas
    public function atualizarPergunta($id, $pergunta, $resposta){
        $sql = "UPDATE perguntas SET pergunta = ?, resposta = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$pergunta, $resposta, $id]);
    }
    
    // Model para deletar perguntas
    public function excluirPergunta($id) {
        $sql = "DELETE FROM perguntas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}

class ProdutoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Produtos
    public function criarProduto($nome, $descricao, $preco, $tipo) {
        $sql = "INSERT INTO produtos (nome, descricao, preco, tipo) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $descricao, $preco, $tipo]);
    }

    // Model para listar Produtos
    public function listarProdutos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Produtos
    public function atualizarProduto($id, $nome, $descricao, $preco, $tipo){
        $sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, tipo = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $descricao, $preco, $tipo, $id]);
    }
    
    // Model para deletar perguntas
    public function excluirProduto($id) {
        $sql = "DELETE FROM produtos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}

class ArtigoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Artigos
    public function criarArtigo($titulo, $conteudo, $autor) {
        $sql = "INSERT INTO artigos (titulo, conteudo, autor) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$titulo, $conteudo, $autor]);
    }

    // Model para listar Artigos
    public function listarArtigos() {
        $sql = "SELECT * FROM artigos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Artigos
    public function atualizarArtigo($id, $titulo, $conteudo, $autor){
        $sql = "UPDATE artigos SET titulo = ?, conteudo = ?, autor = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$titulo, $conteudo, $autor, $id]);
    }
    
    // Model para deletar perguntas
    public function excluirArtigo($id) {
        $sql = "DELETE FROM artigos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
?>