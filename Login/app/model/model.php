<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar User   
    public function criarUser($nome, $nome_u, $email, $senha) {
       
            $sql = "INSERT INTO user (nome, nome_u, email, senha, tipo) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $nome_u, $email, $senha, 2]);
            return true;
          
        } 
    }

?>