<?php

    if(isset($_POST) && $_POST){
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $logado = false;

      // obtendo conteudo do arquivo usuarios.json
      $usuarios = file_get_contents('./data/usuarios.json');

      // transformando o conteudo do arquivo usuarios.json em um array
      $arrayUsuarios = json_decode($usuarios, true);

      // Percorrendo o array que contem a lista de usuarios
      foreach ($arrayUsuarios["usuarios"] as $usuario) {

        //validando se o email e a senha estão corretos
        if ($email == $usuario["email"]){
          if (password_verify ($senha, $usuario["senha"])){

            $logado = true;

            // iniciando sessao caso o usuario tenha informado usuario e senha corretamente 

            session_start();

            $_SESSION['id']   = $usuario['id'];
            $_SESSION['nome'] = $nome['nome'];
            
            // redirecionar para a lista de usuario (mesmo conceito do href)
            header("Location: usuarios.php");
          }
          
        }
      }
      
    }
?>
<?php $tituloPagina = "Formulário de Login"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
  <main class="container">
    <article class="row">
      <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
        <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
          <form action="login.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btnCadastrar">Entrar</button>
            <!-- mensagem  -->
            <div class="form-group" role="alert">
              <?php
                if(isset($_POST) && $_POST) {
                  if(!$logado){
                    echo '<div class="alert alert-danger my-4">Usuário ou senha inválidos.</div>';
                  }
                }
              ?>
            </div>
          <!--// mensagem  -->

          </form>
      </section>
    </article>
  </main>
<?php require_once("./inc/footer.php"); ?>