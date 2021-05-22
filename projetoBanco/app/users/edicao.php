<?php
    include '../../classes/session/Session.php';
    Session::validaSession(true);

	$id = $_GET['id'];

	include 'action/recovery.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuários</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container py-4">
		<h1>Editar Usuários</h1>
		<h4>Informe um novo usuário ou senha para o login</h4>
		<form method="POST" action="action/editar.php">

		<div class="row">
            <div class="col">
                <input type="text" readonly name="id" required class="form-control" value="<?php echo $dadosUsuario['id'] ?>">
            </div>
        </div>
	
				<div class="row">
					<div class="col">
						<input type="email" name="email" required class="form-control" value="<?php echo $dadosUsuario['email'] ?>" placeholder="Email...">
					</div>
					<div class="col">
						<input type="text" name="senha" required class="form-control" value="<?php echo $dadosUsuario['senha'] ?>" placeholder="Senha...">
					</div>

		</div>	

		<br>

		<button type="submit" class="btn btn-primary">Atualizar</button>


	</div>

</body>
</html>