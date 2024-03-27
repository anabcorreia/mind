<?php
require_once 'C:\xampp\htdocs\mind\mind_saudavel-26-03\Login\app\model\model.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new UserModel($pdo);
    }

    public function criarUser($nome, $email, $senha) {
        $result = $this->userModel->criarUser($nome, $email, $senha);

        if ($result) {
            $_SESSION['mensagem'] = 'Conta criada com sucesso';
        } else {
            $_SESSION['mensagem'] = 'Erro ao criar a conta';
        }
    }
}
?>