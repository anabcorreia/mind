<?php
require_once 'app\model\UserModel.php';


class UserController {
    private $userModel;

    public function __construct($pdo) {

        $this->userModel = new UserModel($pdo);
    }

    public function criarUser($nome, $email, $senha, $tipo) {
        $this->userModel->criarUser($nome, $email, $senha, $tipo);
    }

    public function listarUsers() {
        return $this->userModel->listarUsers();
    }

    public function exibirListaUsers() {
        $users = $this->userModel->listarUsers();
        include 'app/view/usuarios/lista.php';
    }

    public function atualizarUser($id, $nome, $email, $senha, $tipo) {
        $this->userModel->atualizarUser($id, $nome, $email, $senha, $tipo);
    }
    
    public function excluirUser ($id) {
        $this->userModel->excluirUser($id);
    }
}
?>