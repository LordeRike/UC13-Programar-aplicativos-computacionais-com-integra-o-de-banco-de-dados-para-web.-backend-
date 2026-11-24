<?php
    $con;

    function Conectar() {
        $host = 'localhost';  
        $port = 5432;        
        $database = 'novaLoja'; 
        $user = 'postgres'; 
        $password = '1234';

        return pg_connect("host=$host port=$port dbname=$database user=$user password=$password");	
    };

    Function ObterConexao(){
        if (!isset($con)) {
            $con = conectar();
        }
        return $con;
    };

?>