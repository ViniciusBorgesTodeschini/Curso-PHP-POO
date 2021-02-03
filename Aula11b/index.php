<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';            
            require_once 'Bolsista.php';            
            require_once 'Tecnico.php';
            require_once 'Professor.php';
            
            
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(31);
            $v1->setSexo("M");
            
            print_r($v1);
            
            $a1 = new Aluno();
            $a1->setNome("Juvenal");
            $a1->setIdade(31);
            $a1->setSexo("M");
            $a1->setMatricula(1111);
            $a1->setCurso("PHP");
            $a1->pagarMensal();
            
            print_r($a1);
                        
            $b1 = new Bolsista();
            $b1->setNome("Juvenal");
            $b1->setIdade(31);
            $b1->setSexo("M");
            $b1->setMatricula(1111);
            $b1->setCurso("PHP");
            $b1->pagarMensal();
            
            print_r($b1);
        ?>
    </pre>
    </body>
</html>
