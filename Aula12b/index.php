<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <pre>
    <body>
        <?php
            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';            
            
            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();
            $can = new Canguru();
            $cac = new Cachorro();
            
            $m->setPeso(85.3);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            
            $can->setPeso(55.3);
            $can->setIdade(3);
            $can->setMembros(4);
            $can->locomover();
            $can->alimentar();
            $can->emitirSom();            
            $can->usarBolsa();

            $cac->setPeso(5.3);
            $cac->setIdade(2);
            $cac->setMembros(4);
            $cac->locomover();
            $cac->alimentar();
            $cac->emitirSom();            
            $cac->enterrarOsso();
            $cac->abanarRabo();
            
            $p->setPeso(0.35);
            $p->setIdade(1);
            $p->setMembros(0);
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();   
            $p->soltarBolha();
            
            $a->setPeso(1);
            $a->setIdade(2);
            $a->setMembros(2);
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();
            
            print_r($m);
            print_r($p);
            print_r($a);
            print_r($can);
            print_r($cac);
            
        ?>
    </pre
    </body>
</html>
