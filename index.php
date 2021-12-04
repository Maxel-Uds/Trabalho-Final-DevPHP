<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Trabalho-Final-DevPHP/sistema/styles.css">
    <title>Login</title>
</head>
<body>
    <h1>Game Store</h1>

<?php  

	if (isset($_GET['msg']))
	{
		include_once 'util.php';
		echo validar_msg($_GET['msg']);
	}
?>

    <h2>Faça login para entrar no sistema</h2>

    <form action="validar.php" method="post">
        <p>
            <label for="usuario">Usuário:</label><br>
            <input type="text" name="usuario" required>
        </p>

        <p>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" required>
        </p>

        <p>
            <button type="submit" name="login">Login</button>
        </p>
    </form>
</body>
</html>