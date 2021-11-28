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
?>