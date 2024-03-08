<?php

require_once "../SCAPHP/models/aluno.php";
class ListaAlunos{
    public $listaAlunos = [];
    public function __construct(){
        if(!isset($_SESSION['alunos'])){
            $_SESSION['alunos'] = [];
        }
    }
    public function cadastrarAluno(Aluno $aluno){
        $_SESSION['alunos'][] = $aluno;
        $this->listaAlunos = $aluno;
    }
    public function listarAluno(){
        return $_SESSION['alunos'];
    }
}
