<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa{
    //ATRIBUTOS
    private $setor;
    private $trabalhando;
    
    //Construtor
    function __construct($nome, $idade, $sexo, $setor) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setor = $setor;
        $this->trabalhando = true;
    }

    //Métodos especiais
    public function mudarTrabalho(){
        $this->trabalhando = false;
    }
    
    //Getters and Setters
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
}
