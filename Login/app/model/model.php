<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar User   
    public function criarUser($nome, $email, $senha) {
        try {
            $sql = "INSERT INTO user (nome, email, senha, tipo) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $email, $senha, 2]);
            return true;
        } catch (PDOException $e) {
            // Trate a exceção conforme necessário (por exemplo, logue o erro)
            return false;
        }
    }
}
?>
