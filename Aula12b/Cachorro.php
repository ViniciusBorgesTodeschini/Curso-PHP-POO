<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    
    public function emitirSom(){
        echo "<p>Au Au Au</p>";
    }
    
    public function enterrarOsso(){
        echo "<p>Enterrou o osso</p>";
    }
    public function abanarRabo(){
        echo "<p>Abanando o rabo</p>";
    }
}
