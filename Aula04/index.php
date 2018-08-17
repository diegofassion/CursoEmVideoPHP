<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO</title>
    </head>
    <body>
        <pre> 
        <?php
            require_once 'Caneta.php'; //Arquivo que precisa para criar a caneta
            
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Preta", 1.0);
            
            print_r($c1);
        ?>
        </pre>
    </body>
</html>
