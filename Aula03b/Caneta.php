<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this -> tampada) {
            echo "<p>[ERRO] Caneta tampada! Não posso rabiscar...</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }  
    }
    public function tampar(){
        $this->tampada = true;
        echo 'Caneta tampada';
    }
    public function  destampar(){
        $this->tampada = false;
        echo 'Caneta destampada';
    }

}
