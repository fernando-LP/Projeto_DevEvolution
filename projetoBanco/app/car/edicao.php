<?php
    include '../../classes/session/Session.php';
    Session::validaSession(true);

	$id = $_GET['id'];

	include 'action/recovery.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Veiculos</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container py-4">
		<h1>Editar Veiculos</h1>
		<form method="POST" action="action/update.php">

		<div class="row">
            <div class="col">
                <input type="text" readonly name="id" required class="form-control" value="<?php echo $dadosVeiculo['id'] ?>">
            </div>


            <div class="row">
			<div class="col">
					<input type="text" name="modelo" required class="form-control" value="<?php echo $dadosVeiculo['modelo'] ?>" placeholder="Modelo....">
				</div>	
				    <div class="col">
					    <input type="number" name="ano" required class="form-control" value="<?php echo $dadosVeiculo['ano'] ?>" placeholder="Ano....">
				    </div>	
				<div class="col">
					<input type="number" name="valor" required class="form-control" value="<?php echo $dadosVeiculo['valor'] ?>" placeholder="Valor....">
			</div>
		</div>	
		<br>

		<button type="submit" class="btn btn-primary">Atualizar</button>


	</div>

</body>
</html>