<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 style="color:blue; text-align: center">Projeto Controle Remoto</h1>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c-> ligar();
            $c->maisVolume();
            $c->abrirMenu();
        ?>
    </body>
</html>
