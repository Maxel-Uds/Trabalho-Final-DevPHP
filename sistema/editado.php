<?php 
	include_once 'lock.php';

	if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['lancamento']) || empty($_POST['produtora']) || empty($_POST['preco']))
	{
		header('location:index.php?msg=edtembranco');
	}
	else
	{
		$id_game = $_POST['id_game'];
		$titulo	= $_POST['titulo'];
		$lancamento = $_POST['lancamento'];
		$produtora = $_POST['produtora'];
		$preco = $_POST['preco'];

		include_once '../database/game.dao.php';

		$result = editar_game($id_game, $titulo, $lancamento, $produtora, $preco);

		if ($result)
		{
			header('location:index.php?msg=editado');
		}
		else
		{
			header('location:index.php?msg=erroeditar');
		}
	}
?>