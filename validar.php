<?php  
if (!isset($_POST['login']) || empty($_POST['usuario']) || empty($_POST['senha']))
{
	header('location:index.php?msg=loginInvalido');
}
else 
{
	$usuario = $_POST['usuario'];
	$senha 	 = $_POST['senha'];

	include_once 'database/usuario.dao.php';

	$result = buscar_usuario($usuario, $senha);

	if ($result)
	{
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;

		header('location:sistema/index.php');
	}
	else
	{
		header('location:index.php?msg=invalido');
	}
}

?>