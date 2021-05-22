<?php
  include 'classes/session/Session.php';
  Session::validaSessionLogin();  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>
<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="app/login/login.php">
      <img class="mb-4" src="img/logo.png">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>


      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pass" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <?php
            // Errro ao Logar
            if($_GET['erro_login'] == true){
                echo '<div class="alert alert-danger" role="alert">
                Credenciais invalidas, tente novamente!
                </div>';
          
            }

              //Permissao de Acesso
            if($_GET['permissao'] == "false"){
              echo '<div class="alert alert-danger" role="alert">
                        Opa! Você não tem permissão para Logar!
                  </div>';
            }


              //Fazendo Logout
            if($_GET['logout'] == true){
              echo '<div class="alert alert-warning" role="alert">
                            Logout realizado Com Sucesso!
                     </div>';
            }
        ?>


      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </body>
</html>
