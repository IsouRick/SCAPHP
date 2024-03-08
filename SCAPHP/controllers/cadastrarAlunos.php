<?php

require_once "../SCAPHP/controllers/listaAlunos.php";
require_once "../SCAPHP/models/aluno.php";

class CadastrarAlunos extends ListaAlunos{
    public function cadastrarNovoAluno(){
        if($_SERVER['REQUEST_METHOD'] ==  'POST'){
            if(isset($_POST['nome']) && isset($_POST['matricula']) && isset($_POST['curso'])){
                $nome = $_POST['nome'];
                $matricula = $_POST['matricula'];
                $curso = $_POST['curso'];
            }
        }

        $novoAluno = new Aluno($_POST['nome'], $_POST['matricula'], $_POST['curso']);
        $this->cadastrarAluno($novoAluno);
    }
}