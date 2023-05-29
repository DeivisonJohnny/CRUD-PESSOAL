<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'usuarios');

    $conn = new mysqli(HOST, USER, PASS, DBNAME);

    // if($conn->connect_errno){
    //     echo "Erro de conexão";
    // } else {
    //     echo "Conexão feita com sucesso";
    // }

?>