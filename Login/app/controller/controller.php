<?php
require_once 'C:\xampp\htdocs\mind_saudavel\Login\app\model\model.php';

class userController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new UserModel($pdo);
    }
    public function criarUser($nome, $nome_u, $email, $senha) {
        $result = $this->userModel->criarUser($nome, $nome_u, $email, $senha);   

        if ($result) {
            $_SESSION['mensagem'] = 'Conta criada com sucesso';
        } else {
            $_SESSION['mensagem'] = 'Erro ao criar a conta';
        }
    }
}
?>