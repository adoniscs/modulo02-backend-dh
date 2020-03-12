<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

  </style>
</head>
<body>
  <form action="editarGet.php" method="post">
    <label for="texto">Digite um texto</label>
    <input type="text" name="texto" id=""><br>
    <label for="tamanho">Tamanho da fonte: </label>
    <select name="tamanho" id="">
      <option value="12pt">12</option>
      <option value="16pt">16</option>
      <option value="32pt">32</option>
      <option value="44pt">44</option>
    </select>
    <br>
    <label for="cor">Selecione uma cor: </label>
    <input type="color" name="cor" id="">
  <br>
  <br>
    <input type="submit" value="Formatar">
  </form>
</body>
</html>