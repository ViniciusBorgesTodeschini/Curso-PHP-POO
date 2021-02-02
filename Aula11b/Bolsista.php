<?php
    require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        
    }
    
    public function pagarMensal() {
        parent::pagarMensal();
    }
}
