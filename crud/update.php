<?php
    include_once("../conexao/conexao.php");
<<<<<<< HEAD
    session_start();
=======
>>>>>>> d02e8aa570e00bd49af2adc30522aa8f9a170501

    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = '$id'");
    $stmt->bindParam(":nome",$nome,);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":senha",$senha);

    $stmt->execute();

<<<<<<< HEAD
    if($_SESSION['nivel'] == 'Admin'){

        header("Location:../dashboard/admin.php?id=$_SESSION[id]");

    }elseif ($_SESSION['nivel'] == 'Funcionarop') {

        header("Location:../dashboard/funcionario.php?id=$_SESSION[id]");

    }elseif ($_SESSION['nivel'] == 'Cliente') {

        header("Location:../dashboard/cliente.php?id=$_SESSION[id]");

    }elseif ($_SESSION['nivel'] == null) {

        header('Location:../index.html');
    }
=======
    echo "Atualizado com Sucesso";
    header('Location:read.php');
>>>>>>> d02e8aa570e00bd49af2adc30522aa8f9a170501

?>