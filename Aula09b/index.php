<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa ("Maria", 31, "F");
            
            $l[0] = new Livro ("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro ("PHP POO", "Maria de Souza", 500, $p[1]);
            
            echo '------------------LISTA DE LIVROS------------------';
            
            $l[0]->abrir();
            $l[0]->folhear(80);
            $l[0]->detalhes();  
        ?>
    </body>
</html>
