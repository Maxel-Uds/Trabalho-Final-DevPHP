<?php 
include_once 'lock.php';
include_once '../database/game.dao.php'; 

	if (!isset($_GET['id_game']))
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		$result = buscar_game($_GET['id_game']);

		if($result == null)
		{
			header('location:index.php?msg=idinvalido');
		}
		else
		{
			$game = mysqli_fetch_assoc($result);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<title>Game Store</title>
</head>
<body>

	<h1>Game Store - Editar jogo</h1>

	<p>
		<a href="index.php">Cancelar Edição</a>
	</p>

	<h3>Editar dados do jogo:</h3>

	<div>
		<form action="editado.php" method="post">
			
			<p>
				<label class="form-label">Título</label><br>
				<input type="text" name="titulo" required value="<?= $game['titulo'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Data de lançamento</label><br>
				<input type="text" name="lancamento" required value="<?= $game['lancamento'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Produtora</label><br>
				<input type="text" name="produtora" required value="<?= $game['produtora'] ?>" class="form-control">
			</p>

            <p>
				<label class="form-label">Preço</label><br>
				<input type="text" name="preco" required value="<?= $game['preco'] ?>" class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar">Editar Game</button>
			</p>

			<input type="hidden" name="id_game" value="<?= $game['id_game'] ?>">

		</form>
	</div>

</body>
</html>