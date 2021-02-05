<?php
require_once 'Mamifero.php';

class Canguru extends Mamifero{
    public function usarBolsa(){
        echo "<p>Usar bolsa</p>";
    }
    public function locomover(){
        echo "<p>Saltando</p>";
    }
}
