<?php  include_once 'lock.php';

if (!isset($_GET['id_game']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_game = $_GET['id_game'];

	include_once '../database/game.dao.php';

	$result = deletar_game($id_game);

	if ($result)
	{
		header('location:index.php?msg=jogodeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>