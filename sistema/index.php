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
    <title>Game Store</title>
</head>
<body>
    <h1>Game Store - Sistema Interno</h1>

    <p>
		<a href="logout.php" class="btn btn-primary btn-sm">Sair do sistema</a>
	</p>

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

	<h2>Livros Cadastrados</h2>

	<?php  

	    echo exibir_livros();

	?>
</body>
</html>