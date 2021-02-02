<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{
    //Atributos
    private $especialidade;
    private $salario;
    
    //Construtor
    function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    
    //Métodos especiais
    public function receberAumento($aum){
        $this->salario += $aum;
    }
    
    //Getters and setters
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}
