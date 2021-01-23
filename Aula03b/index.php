<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Caneta.php'; 
           
           $c1 = new Caneta;
           $c1 ->modelo = "Bic Cristal";
           $c1 ->cor = "Azul";
                               
           print_r($c1);
           $c1 ->destampar();
           $c1 ->rabiscar();           
           
        ?>
    </pre>
    </body>
</html>
