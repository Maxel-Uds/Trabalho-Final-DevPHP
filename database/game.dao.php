<?php  
    include_once 'conn.php';

    function salvar_game($titulo, $lancamento, $produtora, $preco)
    {
        $conn = conectar();

        $sql = "INSERT INTO games_tb (titulo, lancamento, produtora, preco) 
        VALUES ('$titulo', '$lancamento', '$produtora', $preco)";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0)
        {
            return true;
        }

        return false;
    }

    function buscar_games()
    {
	    $conn = conectar();

	    $sql = "SELECT * FROM games_tb";

	    $result = mysqli_query($conn, $sql);

    	if (mysqli_affected_rows($conn) > 0)
	    {
		    return $result;
	    }

	return null;
    }

    function exibir_games()
    {
        $result = buscar_games();

        if ($result == null)
        {
            $retorno = '<h3>Não há games cadastrados</h3>';
        }
        else
        {
            $retorno = '<table border="1px" width="400px">';
            $retorno .= '<tr>';
            $retorno .= '<th>ID</th>'; 
            $retorno .= '<th>Título</th>';
            $retorno .= '<th>Lançamento</th>';
            $retorno .= '<th>Produtora</th>';
            $retorno .= '<th>Preço</th>';
            $retorno .= '<th>Deletar</th>';
            $retorno .= '<th>Editar</th>';
            $retorno .= '</tr>';

            while ($game = mysqli_fetch_assoc($result))
            {
                $retorno .= '<tr>';
                $retorno .= "<td>" . $game['id_game']    . "</td>";
                $retorno .= "<td>" . $game['titulo']     . "</td>";
                $retorno .= "<td>" . $game['lancamento'] . "</td>";
                $retorno .= "<td>" . $game['produtora']  . "</td>";
                $retorno .= "<td>" . $game['preco']      . "</td>";
                $retorno .= "<td>" . link_deletar($game['id_game']) . "</td>";
                $retorno .= "<td>" . link_editar($game['id_game']) . "</td>";
                $retorno .= '</tr>';
            }

            $retorno .= '</table>';
            $retorno .= '</div>';
        }

        return $retorno;
    }

    function link_deletar($id_game)
{
	$link = '<a href="deletar.php?id_game='.$id_game.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este jogo?\')" class="btn btn-danger">Deletar</a>';

	return $link;
}

function link_editar($id_game)
{
	$link = '<a href="editar.php?id_game='.$id_game.'" class="btn btn-warning">Editar</a>';
	return $link;
}


function deletar_game($id_game)
{
	$conn = conectar();

	$sql = "DELETE FROM games_tb WHERE id_game = $id_game";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

function buscar_game($id_game)
{
	$conn = conectar();

	$sql = "SELECT * FROM games_tb WHERE id_game = $id_game";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

function editar_game($id_game, $titulo, $lancamento, $produtora, $preco)
{
	$conn = conectar();

	$sql = "UPDATE games_tb SET titulo = '$titulo', lancamento = '$lancamento', produtora = '$produtora', preco ='$preco' 
	WHERE id_game = $id_game";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}
?>