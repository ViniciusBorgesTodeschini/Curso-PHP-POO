<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $L[0] = new Lutador("Pretty boy" , "França", 31, 1.75, 68.9, 11,3,1);
            $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8,14,2,3);
            $L[2] = new Lutador("Snapshadow", "EUA", 35 , 1.65, 80.9, 12, 2, 1);
            $L[3] = new Lutador("Dead Code", "Austrália", 28, 1.93 , 81.6 , 13 , 0, 2);
            $L[4] = new Lutador("UFOCobol","Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $L[5] = new Lutador("Nerdaart","EUA", 30, 1.81, 105.7, 12, 2, 4);

            echo "CHEGOU A HORA! A grande luta da noite será entre:";
            
            $UEC01 = new Luta();
            $UEC01->marcarLuta($L[2], $L[3]);
            $UEC01->lutar();
            
            $L[2]->status();
            $L[3]->status();

        ?>
    </body>
</html>
