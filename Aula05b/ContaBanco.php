<?php

class ContaBanco {
    //ATRIBUTOS
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //CONSTRUTOR
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }
    
    //MÉTODOS GETTER AND SETTERS
    public function getNumConta(){
        return $this ->numConta;
    }
    public function setNumConta($n){
        $this ->numConta = $n;
    }
    public function  getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){
        $this->status = $st;
    }
    
    //MÉTODOS ESPECIAIS
    public function abrirConta($tp){
        $this->setTipo($tp);
        $this->setStatus(true);
        if ($this->tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($this->tipo == "CP") {
            $this->setSaldo(150);
        } else {
            echo "<p>[ERRO] Tipo de conta inválido</p>";
        }
    }
    
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>[ERRO] Conta com dinheiro, retire o valor para encerrar sua conta</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>[ERRO] Conta com saldo negativo, regularize a situação para encerrar sua conta</p>";
        } else {
            $this->setStatus(false);
        }
    }
    
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+ $v);
            echo "<p>Depósito de $v autorizado na conta de ". $this->getDono()."</p>";
        } else {
            echo "<p>[ERRO] Impossível depositar, a conta não está aberta</p>";
        }
    }
    
    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v autorizado na conta de ". $this->getDono()."</p>";
            } else {
                echo "<p>[ERRO] Saldo insuficiente</p>";
            }
        } else {
            echo "<p>[ERRO] Impossível sacar, a conta não está aberta</p>";
        }
    }

    public function pagarMensal(){
        if($this->getStatus()){
            if ($this->getTipo() == "CC"){
                $v = 12;
                $this->setSaldo($this->getSaldo() - $v);
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de $v debitada da conta de ". $this->getDono()."</p>";
            } else {
                echo "<p>[ERRO] Tipo de conta inválido</p>";
            }
        } else {
            echo "<p>[ERRO] Impossível débitar a mensalidade, a conta não está aberta</p>";
        }
    }
}
