<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Principal
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $m = new Mamifero();
        $l = new Lobo();
        $c = new Cachorro();
        
        $m->emitirSOm();
        $l->emitirSOm();
        $c->emitirSom();
        $c->reagirFrase("Olá");
        $c->reagirDono(true);
        $c->reagirHora(13);
        $c->reagirIdadePeso(4, 5);
        ?>
    </body>
</html>
