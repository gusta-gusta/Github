<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 09</title>
  </head>
  <body>
    <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

        $p[0] = new pessoa("Gusta", 21, "M");
        $p[1] = new pessoa("Lorenna", 18, "M");

        $l[0] = new Livro("PHP POO", "Alan", 100, $p[0]);
        $l[1] = new Livro("ScriptCase", "Edu", 50, $p[0]);

        $l[2] = new Livro("Amor e Gelato", "Jcarlet", 250, $p[1]);
        
        print_r($l[0]);
      
      
      ?>
      </pre>
  </body>
</html>