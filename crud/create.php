<?php
    include_once("../conexao/conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $stmt = $conn->prepare("INSERT INTO usuarios (nome,email,senha) values (:nome,:email,:senha)");
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":senha",$senha);

    $stmt->execute();

    echo "Cadastrado com Sucesso";
    header('Location:read.php');


?>