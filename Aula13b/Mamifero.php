<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    
    public function emitirSOm(){
        echo "<p>Som de Mamífero</p>";
    }
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
