<?php 
    include_once 'lock.php';
    include_once '../database/game.dao.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
    <title>Game Store</title>
</head>
<body>
    <h1>Game Store</h1>

    <p>
		<a href="logout.php" class="btn btn-primary btn-sm">Sair do sistema</a>
	</p>

<?php  
	if (isset($_GET['msg']))
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}
?>

	<h3>Cadastre um novo jogo:</h3>

	<form action="cadastrar.php" method="post">
			
		<p>
			<label for="titulo">Título: </label><br>
			<input type="text" name="titulo" required>
		</p>

		<p>
			<label for="lancamento">Ano de lançamento:</label><br>
			<input type="text" name="lancamento" required>
		</p>

		<p>
			<label for="produtora">Produtora:</label><br>
			<input type="text" name="produtora" required>
		</p>

        <p>
			<label for="preco">Preço:</label><br>
			<input type="number" name="preco" required step=0.01>
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>

	</form>

	<h2>Jogos Cadastrados</h2>

	<?php  

	    echo exibir_games();

	?>
</body>
</html>