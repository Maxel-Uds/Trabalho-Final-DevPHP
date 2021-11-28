<?php  
    include_once 'lock.php';
    if (!isset($_POST['cadastrar']) || empty($_POST['titulo']) || empty($_POST['lancamento']) || empty($_POST['produtora']) || empty($_POST['preco']))
    {
        header('location:index.php?msg=cadembranco');
    }
    else
    {
        $titulo	 = $_POST['titulo'];
        $lancamento   = $_POST['lancamento'];
        $produtora = $_POST['produtora'];
        $preco = $_POST['preco'];

        include_once '../database/game.dao.php';

        $result = salvar_game($titulo, $lancamento, $produtora, $preco);

        if ($result)
        {
            header('location:index.php?msg=cadastrado');
        }
        else
        {
            header('location:index.php?msg=errocadastro');
        }
    }
?>