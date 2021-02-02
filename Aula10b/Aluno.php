<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    //Atributos
    private $matricula;
    private $curso;
    
    //Construtor
    function __construct($nome,$idade,$sexo, $matricula, $curso) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
    
    //Métodos especiais
    public function cancelarMatricula(){
        echo "<p>Matrícula será cancelada</p>";
    }
    
    //Getters and setters
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }



}
