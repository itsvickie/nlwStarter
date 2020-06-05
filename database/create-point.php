<?php require_once("./conexao.php"); 

    if (isset($_POST["name"])){
        $name = $_POST["name"];
        $address = $_POST["address"];
        $address2 = $_POST["address2"];
        $state = $_POST["state"];
        $city = $_POST["city"];
    }

    $create = "INSERT INTO entidades (nome, endereco, numeroComplemento, estado, cidade) VALUES ('$name', '$address', '$address2', '$state', '$city')";

    $query = mysqli_query($conn, $create);

    $query ? header("location:./../index.php") : die("Ops, ocorreu um erro no seu cadastro!");
?>