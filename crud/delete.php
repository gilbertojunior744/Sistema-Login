<?php
    include_once("../conexao/conexao.php");

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = $id");
    $stmt->execute();

    
    header('Location:read.php');


?>