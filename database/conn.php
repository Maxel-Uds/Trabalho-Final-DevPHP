<?php  
    function conectar()
    {
        return new mysqli('us-cdbr-east-05.cleardb.net', 'b36a373dcfe740', '9d004584', 'games_db');
    }
?>