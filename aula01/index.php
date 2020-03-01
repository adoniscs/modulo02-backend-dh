    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 01</title>
    </head>
    <body>

    <?php
        $titulo = "<p>Primeira aula de PHP</p>";
    ?>

    <h1>
        <? echo $titulo ?>
    </h1>

    <!-- Start condicionais -->
    <!-- if / else  -->
    <?php
        $idade = 17;

        if ($idade >= 18) {
            echo '<p>Maior de idade</p>';
        }
        else {
            echo "<p>Menor de idade</p>";
        }
    ?>
    <!-- End condicionais -->
    <hr>
    <!-- Start Exercicio da condicional IF -->
    <h1>
        Exercícios de Condicionais
    </h1>
    <p>
        1 - Verificar se uma pesoa deve votar ou não, ou, se esssa pessoa possui voto facultativo.
    </p>

    <?php 
        $idade = 15;

        if ($idade >= 18 && $idade <= 70) {
            echo "R: Voto obrigatório.";
    }
        elseif ($idade >= 16 && $idade < 18 || $idade > 70) {
            echo "R: Voto não obrigatório.";
        }
        else {
            echo "R: Não pode votar.";
        }


    ?>
    <!-- End Exercício  -->
    <hr>
    <!--Start Switch -->
    <?php

        $genero = "Masculino";

        switch ($genero) {
            case "Masculino":
                echo "Genero masculino";
                break;
            case "Feminico":
                echo "Genero feminino";
                break;
            default:
                echo "Prefere não dizer";
            break;
        }
    ?>
    <!-- End Switch  -->

    <hr>
    <!-- Start Exercicio Switch  -->
    <h1>Exercicio condicional - Switch</h1>
    <p>
        1 - Verificar se uma variavel é 0 e retornar: 'você informou o valor 0'. 
        Ou, se a variavel é 1 e retornar: 'você informou o valor 1'. 
        Ou, se a variavel é qualquer outro número e retornar o valor informado.
    </p>

    <?php 
        $numero = 1;

        switch ($numero) {
            case 0:
                echo "O número informado foi: $numero";
                break;
            case 1:
                echo "O número informado foi: " . $numero;
                break;

            default:
                echo "O número informado foi: " . $numero;
            break;       
        }
    ?>
    <!-- End Exercício  -->
    <hr>
    <!-- Star Array simples-->
    <h1>Array</h1>

    <?php
        $arrayAnimais = [
            'Cachorro', 
            'Gato', 
            'Girafa', 
            'Elefante'
        ];
        echo "<pre>";
                var_dump ($arrayAnimais);
        echo "</pre>";

        $estojo = array (
            'Caneta azul', 
            'Lápis', 
            'Régua',
            'Borracha'
        );
        echo "<pre>";
                var_dump ($estojo);
        echo "</pre>";
    ?>
    <!-- End Array simples-->
    <hr>
    <!-- Start array associativos  -->
    <h1>Array Associativo</h1>
    <?php
        $usuario = [
            "email" => "adoniscs@gmail.com",
            "senha" => "9348932ja@jsd0fSk"
        ];

        // percorrendo array usuario
        echo "<pre>";
            var_dump($usuario);
        echo "</pre>";
    ?>
    <!-- End array associativos  -->
    <hr>
    </body>
    </html>