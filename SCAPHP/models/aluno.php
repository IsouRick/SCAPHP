<?php

class Aluno{
    private $nome;
    private $matricula;
    private $curso;
    public function __construct($nome,$matricula,$curso){
        $this->nome = $nome;
        $this->matricula= $matricula;
        $this->curso = $curso;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
}
