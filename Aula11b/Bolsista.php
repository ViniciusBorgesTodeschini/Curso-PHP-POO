<?php
    require_once 'Aluno.php';
final class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p>Pagar bolsa!</p>";
    }
    
    public function pagarMensal() {
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }
}
