<?php
require_once 'Lutador.php';
class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos especiais
    public function marcarLuta($l1,$l2){
        if ($l1->getCategoria() == $l2->getCategoria() && $l1!=$l2){
            $this->aprovada = true;
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->aprovada = false;
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar(){
        if ($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = random_int(0, 2);
            switch ($vencedor){
                case 0:
                    echo "<br>-----------------------------";
                    echo "<br>Empatou!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                
                case 1:
                    echo "<br>-----------------------------";                    
                    echo "<br>O lutador desafiado " . $this->desafiado->getNome() . " venceu";
                     $this->desafiado->ganharLuta();
                     $this->desafiante->perderLuta();
                    break;
                
                case 2:
                    echo "<br>-----------------------------";                    
                    echo "<br>O lutador desafiante " . $this->desafiante->getNome() . " venceu";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;                    
            }
            
        } else {
            echo "<br>Luta não pode acontecer!";
        }
        
    }
    
    //Getters and Setters
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


}
