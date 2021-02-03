<?php
    require_once 'Pessoa.php';
class Aluno extends Pessoa{
    protected $matricula;
    protected $curso;
    
    public function pagarMensal(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
