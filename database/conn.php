<?php  
    function conectar()
    {
        return mysqli_connect('us-cdbr-east-05.cleardb.net', 'b36a373dcfe740', '9d004584', 'heroku_25e7cf0e7bacc74');
    }
?>