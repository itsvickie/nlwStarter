<?php
    //Conexão com o Banco de Dados - Ecoleta
    $conn = mysqli_connect("localhost", "root", "", "ecoleta");

    //Verifica se a conexão teve sucesso
    if (mysqli_connect_errno()){
        die("Ops, a conexão do banco falhou!") . mysqli_connect_errno();
    }
?>