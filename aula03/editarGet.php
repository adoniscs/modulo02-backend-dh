<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $texto    =  isset ($_POST['texto'])   ? $_POST['texto']   : "Não informado";
    $tamanho  =  isset ($_POST['tamanho']) ? $_POST['tamanho'] : "12pt";
    $cor      =  isset ($_POST['cor'])     ? $_POST['cor']     : "#000";
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    span.texto {
      font-size: <?php echo $tamanho; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
  <?php
    echo "<span class='texto'>$texto</span>";
  ?>
  <br>
  <a href="extra_get.php">Voltar</a>
</body>
</html>