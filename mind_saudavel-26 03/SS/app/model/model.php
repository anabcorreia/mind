<?php
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