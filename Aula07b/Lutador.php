<?php
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Construtor
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    //Métodos especiais
    public function apresentar(){
        echo "<p>------------------------------</p>";
        echo "<br>" . $this->getNome() . 
                " é um peso " . $this->getCategoria() .
             " com " . $this->getVitorias() . " vitórias " . 
                $this->getDerrotas() . " derrotas  e " . 
                $this->getEmpates() . " empates.";
    }
    public function status(){
        echo "<p>------------------------------</p>";
        echo "<br>Lutador: " . $this->getNome();
        echo "<br>Idade: " . $this->getIdade() . " anos";
        echo "<br>Origem: " . $this->getNacionalidade();
        echo "<br>Categoria: " . $this->getCategoria();
        echo "<br>Medindo " . $this->getAltura() . " de altura";
        echo "<br>Pesando " . $this->getPeso() . "Kg";
        echo "<br>Ganhou: " . $this->getVitorias();
        echo "<br>Perdeu: " . $this->getDerrotas();
        echo "<br>Empatou: " . $this->getEmpates() . " lutas";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    //Métodos Getters and Setters
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }
    
    public function getAltura() {
        return $this->altura;
    }
    
    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setAltura($altura) {
        $this->peso = $altura;
    }
    
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if($this->getPeso()< 52.2){
            $this->categoria = "invalido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }
}
