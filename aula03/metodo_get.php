<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método GET PHP</title>
</head>
<body>
  <form action="receberGet.php" method="get">

    Nome: <input type="text" name="nome" /> <br />
    Ano de nascimento: <input type="number" name="anoNascimento" /><br />
    <fieldset><legend>Sexo</legend>
      <input type="radio" name="sexo" id="masculino" value="masculino" checked/> <!-- o id sera para quando eu clicar na palavra, o value e para formatar no php-->
      <label for="masculino">Masculino</label> <br />
      <input type="radio" name="sexo" id="feminino" value="feminino"/>
      <label for="feminino">Feminino</label> <br />
    </fieldset>
    <br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>