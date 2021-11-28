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
            $retorno .= '</tr>';

            while ($game = mysqli_fetch_assoc($result))
            {
                $retorno .= '<tr>';
                $retorno .= "<td>" . $game['id_game']    . "</td>";
                $retorno .= "<td>" . $game['titulo']     . "</td>";
                $retorno .= "<td>" . $game['lancamento'] . "</td>";
                $retorno .= "<td>" . $game['produtora']  . "</td>";
                $retorno .= "<td>" . $game['preco']      . "</td>";
                $retorno .= '</tr>';
            }

            $retorno .= '</table>';
        }

        return $retorno;
    }
?>