<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        // put your code here
        require_once 'caneta.php';
        $c1 = new Caneta("Jefferson", "preto", 0.5);
        print_r($c1);
        $c2 = new Caneta("Helena", "Amarela", 0.9);
        
        print_r($c2);
        ?>
        </pre>
    </body>
</html>
