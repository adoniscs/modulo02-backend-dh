<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recebendo informacao via metodo GET</title>
</head>
<body>
  <?php
    $nome          = isset($_GET['nome'])          ? $_GET['nome']          : "Não informado";
    $anoNascimento = isset($_GET['anoNascimento']) ? $_GET['anoNascimento'] : 0;
    $sexo          = isset($_GET['sexo'])          ? $_GET['sexo']          : "Não informado";
    $idade         = date("Y") - $anoNascimento;

    echo "Seu nome é $nome, tem $idade anos e o seu sexo é $sexo."
  ?>
  <br> <br>
  <a href="metodo_get.php">Voltar</a>
</body>
</html>