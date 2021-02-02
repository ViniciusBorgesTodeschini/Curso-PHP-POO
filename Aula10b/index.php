<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Funcionario.php';
            require_once 'Professor.php';
            
            $p1 = new Pessoa("Eu",24,"M");
            $p2 = new Aluno("Pedro",21,"M", 1111, "PHP");
            $p3 = new Professor("João", 44, "M", "Mat", 2500);
            $p4 = new Funcionario("Maria", 32, "F", "Diretora", true);

            
            echo "DETALHES";
            echo "<br>------------------------------------------------<br>";
            print_r($p1);
            echo "<br>------------------------------------------------<br>";
            print_r($p2);
            echo "<br>------------------------------------------------<br>";
            print_r($p3);
            echo "<br>------------------------------------------------<br>";
            print_r($p4);
            
            $p4->mudarTrabalho();
            echo "<br>------------------------------------------------<br>";
            print_r($p4);
            
        ?>
        </pre>
    </body>
</html>
