<?php
    include 'classes/session/Session.php';
    Session::validaSession();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Veiculos</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>


  <div class="container py-4">

    <div>
        Seja Bem Vindo <?php session_start(); echo $_SESSION['email'] ?>
        <a href="logout.php">Sair</a>
     </div>   

     <!-- Cadastro de veiculos -->

  	<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Cadastrar</h2>
          <p> Faça o Cadastro de novos Veiculos </p>
          <a href="app/car/new.php"><button class="btn btn-outline-light" type="button">Cadastrar Veiculos</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Visualizar</h2>
          <p> Visualize, Exclua e Edite veiculos.</p>
          <a href="app/car/list.php"<button class="btn btn-outline-secondary" type="button">Visualizar</button></a>
        </div>
      </div>
    </div>
    
<!-- Cadastro de usuários -->

  	<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-info rounded-3">
          <h2>Cadastrar usuários</h2>
          <p> Cadastrar novos Usuários </p>
          <a href="app/users/new.php"><button class="btn btn-outline-light" type="button">Cadastrar</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-success border rounded-3">
          <h2>Visualizar usuários</h2>
          <p> Visualize, Exclua e Edite usuários.</p>
          <a href="app/users/list.php"<button class="btn btn-outline-dark" type="button">Visualizar</button></a>
        </div>
      </div>
    </div>





 </div>






</body>
</html>