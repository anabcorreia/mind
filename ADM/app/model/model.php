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
    public function criarProduto($nome, $descricao, $preco, $tipo, $imagem) {
        $sql = "INSERT INTO produtos (nome, descricao, preco, tipo, imagem) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $descricao, $preco, $tipo, $imagem]);
    }

    // Model para listar Produtos
    public function listarProdutos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Produtos
    public function atualizarProduto($id, $nome, $descricao, $preco, $tipo, $imagem){
        $sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, tipo = ?, imagem = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $descricao, $preco, $tipo, $imagem, $id]);
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
    public function criarArtigo($titulo, $conteudo, $autor, $imagem) {
        $sql = "INSERT INTO artigos (titulo, conteudo, autor, imagem) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$titulo, $conteudo, $autor, $imagem]);
    }

    // Model para listar Artigos
    public function listarArtigos() {
        $sql = "SELECT * FROM artigos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Artigos
    public function atualizarArtigo($id, $titulo, $conteudo, $autor, $imagem){
        $sql = "UPDATE artigos SET titulo = ?, conteudo = ?, autor = ?, imagem =? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$titulo, $conteudo, $autor, $imagem, $id]);
    }
    
    // Model para deletar perguntas
    public function excluirArtigo($id) {
        $sql = "DELETE FROM artigos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}

    class NoticiaModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar noticias
    public function criarNoticia($titulo, $conteudo, $data, $imagem) {
        $sql = "INSERT INTO noticias (titulo, conteudo, data, imagem) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$titulo, $conteudo, $data, $imagem]);
    }

    // Model para listar noticias
    public function listarnoticias() {
        $sql = "SELECT * FROM noticias";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar noticias
    public function atualizarNoticia($id, $titulo, $conteudo, $data, $imagem){
        $sql = "UPDATE noticias SET titulo = ?, conteudo = ?, data = ?, imagem = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$titulo, $conteudo, $data, $imagem, $id]);
    }
    
    // Model para deletar perguntas
    public function excluirNoticia($id) {
        $sql = "DELETE FROM noticias WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}
?>