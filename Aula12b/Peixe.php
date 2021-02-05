<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "<p>Nadando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo substancia</p>";
    }
    public function emitirSom(){
        echo "<p>Peixe não faz som</p>";
    }
    
    public function soltarBolha(){
        echo "<p>Peixe soltou uma bolha</p>";
    }
            
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
