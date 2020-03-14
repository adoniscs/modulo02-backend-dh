<?php
  if(isset($_POST) && $_POST) {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

  //criando array de novos usuários
  $novoUsuario = [
    "nome" => $nome,
    "sobrenome" => $sobrenome,
    "email" => $email,
    "senha" => $senha
  ];

  //obtendo conteudo do arquivo usuario.json
  $usuario = file_get_contents('./data/usuarios.json');
  
  //transformando o conteudo do arquivo usuarios.json em um array
  $arrayUsuarios = json_decode($usuario, true);
  
  //adicionando novo usuário no array de usuários
  array_push($arrayUsuarios["usuarios"], $novoUsuario);
  
  $jsonUsuarios = json_encode($arrayUsuarios);

  $cadastrou = file_put_contents('./data/usuarios.json', $jsonUsuarios);

  if($cadastrou){
    echo '<div class="alert alert-success">Usuário cadastrado com sucesso</div>';
  } 
  else {
    echo '<div class="alert alert-danger">Falha ao processar requisiçãos</div>';
  }
}
?>