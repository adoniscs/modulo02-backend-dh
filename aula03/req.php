<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $nome = isset($_REQUEST['nome']) ? $_REQUEST['nome'] : "Não informado";
    $sobrenome = isset($_REQUEST['sobrenome']) ? $_REQUEST['sobrenome'] : "Não informado";
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "Não informado";
    $senha = isset($_REQUEST['senha']) ? $_REQUEST['senha'] : "Não informado";

    echo "Seu nome completo é $nome $sobrenome. O email cadastrado foi $email";
  ?>
  <br>
  <a href="request.php">Voltar</a>
</body>
</html>