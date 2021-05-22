<?php
    include '../../classes/session/Session.php';
    Session::validaSession(true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Veiculo</title>
	<meta charset="UTF-8" />
	<form method="POST" action="action/save.php">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container py-4">
		<h1>Cadastrar Veiculo</h1>
		<div class="form-group">
			<label for="marca">Marca</label>
			<select class="form-control" required name="marca">
				<option value="Chevrolet">Chevrolet</option>
				<option value="Ford">Ford</option>
				<option value="Fiat">Fiat</option>
				<option value="Volskwagen">Volskwagen</option>
			</select>
			<small class="form-tet text-muted"> Selecione a marca do Veiculo.</small>

		</div>



	
		<div class="row">
			<div class="col">
					<input type="text" name="modelo" required class="form-control" placeholder="Modelo....">
				</div>	
				<div class="col">
					<input type="number" name="ano" required class="form-control" placeholder="Ano....">
				</div>	
				<div class="col">
					<input type="number" name="valor" required class="form-control" placeholder="Valor....">
			</div>
		</div>	



		<br>


		<div class="form-group">
				<label for="obs">OBS: </label>
				<textarea class="form-control" name="obs" raws="3"></textarea>
		</div>


		<br>

		<button type="submit" class="btn btn-primary">Cadastrar</button>


	</div>

</body>
</html>