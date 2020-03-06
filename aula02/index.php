<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 02 - PHP</title>
</head>
<body>
    <h1>Loops e funções</h1>

    <!-- Loop FOR -->

    <h3>Loop - FOR com incremento</h3>

    <?php
        for ($i=1; $i <= 10 ; $i++) { 
            echo $i .   "<br>";
        }
    ?>
    <hr>

    <h3>Loop - FOR com decremento</h3>

    <?php
        for ($a=10; $a >=1 ; $a--) { 
            echo $a . "<br>";
        }
    ?>
    <hr>
    <!-- /Loop FOR -->

    <!-- While FOR -->
    <h3>Loop - While com incremento</h3>

    <?php
        $i = 1;
        while ($i <= 10){
            echo $i . "<br>";
            $i++;
        }
    
    ?>
    <hr>
    <h3>Loop - While com decremento</h3>

    <?php
        $i = 10;
        while ($i >= 1){
            echo $i . "<br>";
            $i--;
        }
    ?>
    <hr>
    <!-- /While FOR -->

    <!-- /Do While FOR -->
    <h3>Loop - Do While com incremento</h3>
    <?php
    $i = 1;

    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 10);
    ?>
    <hr>
    
    <h3>Loop - Do While com decremento</h3>
    <?php
    $a = 10;
        do {
            echo $a . "<br>";
            $a--;
        } while ($a >= 1);
    ?>
    <hr>
    <!-- /Do While FOR -->

    <!-- /FOR percorrendo array -->
    <h3>Exemplos percorrendo array com Loops</h3>
    <h3>For percorrendo array</h3>

    <?php
    // array de animais que será utilizado para os exemplos 
    // onde iremos percorrer array
        $animais = ["Cachorro", "Elefante", "Leão", "Girafa", "Gato"];

        for ($i=0; $i < count($animais); $i++) { 
            echo $animais[$i] . "<br>";
        }
    ?>
    <hr>
    <!-- /FOR percorrendo array -->

    <!-- While percorrendo array -->
    <h3>While percorrendo array</h3>
    <?php
        $animais = ["Cachorro", "Elefante", "Leão", "Girafa", "Gato"];
        $i = 0;
        while ($i < count($animais)) {
            echo $animais[$i] . "<br>";
            $i++;
        }
    ?>

    <hr>
    <!-- /While percorrendo array -->

    <!-- DO While percorrendo array -->
    <h3>Do While percorrendo array</h3>

    <?php
        $animais = ["Cachorro", "Elefante", "Leão", "Girafa", "Gato"];

        do {
            echo $animais[$a] . "<br>";
            $a++;
        } while ($a < count($animais));
    ?>
    <hr>
    <!-- /DO While percorrendo array -->

    <!-- Foreach percorrendo array -->
    <h3>Loop - foreach percorrendo array</h3>
    <?php
        $animais = ["Cachorro", "Elefante", "Leão", "Girafa", "Gato"];

        foreach ($animais as $animal) {
            echo $animal . "<br>";
        }
    ?>
    <!-- /Foreach percorrendo array -->
    <hr>
    <!-- Foreach percorrendo array associativo -->
    <h3>Loop - foreach percorrendo array associativo</h3>
    <?php
        $users = [
            "nome"      => "Adonis",
            "email"     => "adonissilveira@gmail.com",
            "telefone"  => "(11) 92342-4321"
        ];

        foreach ($users as $user => $value) {
            echo "{$user} => {$value}" . "<br>";
        }
    ?>
    <!-- /Foreach percorrendo array associativo -->
    <hr>

    <!-- funções -->
    <h3>Funções</h3>
    <h3>Função que retornará tabuada</h3>
    <?php
        function tabuada ($numero) {
            $resultado = 0;
            $arrayResultado = [];

            for ($i=0; $i <= 10 ; $i++) { 
                $resultado = $numero * $i;
                echo $resultado . "<br>";
                array_push($arrayResultado, $resultado);
            }
        }
        tabuada(3);

    ?>
</body>
</html>