<?php
class PerguntasController {
    private $perguntasModel;

    public function __construct($pdo) {

        $this->perguntaModel = new PerguntaModel($pdo);
    }

    public function listarPerguntas() {
        return $this->perguntaModel->listarPerguntas();
    }

    public function exibirListaPerguntas() {
        $perguntas = $this->perguntaModel->listarPerguntas();
        include 'C:\xampp\htdocs\mind_saudavel\ADM\app\view\perguntas\view.php';
    }

}