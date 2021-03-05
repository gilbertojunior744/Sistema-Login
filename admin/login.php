<?php
    include_once("../conexao/conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":senha",$senha);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
<<<<<<< HEAD
    

    foreach ($result as $row ) {
        

        if($row['nivel'] == "Admin" ){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['nivel'] = $row['nivel']; 
            
            header("Location: ../dashboard/admin.php?id=$row[id]");
            
            exit();
        } 
        elseif ($row['nivel'] == "Cliente"){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['nivel'] = $row['nivel']; 
            header("Location: ../dashboard/cliente.php?id=$row[id]");
            exit();
            
        }elseif($row['nivel'] == "Funcionario") {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['nivel'] = $row['nivel']; 
            header("Location: ../dashboard/funcionario.php?id=$row[id]");
            exit();
        }elseif($row['nivel'] == "") {
            echo "Email ou senha incorretos";
            exit();
        }
    
=======

>>>>>>> d02e8aa570e00bd49af2adc30522aa8f9a170501
    if(count($result) > 0){
        header("Location:../crud/read.php");
    }else{
        header("Location:../index.html");
    }
<<<<<<< HEAD
    }
=======

>>>>>>> d02e8aa570e00bd49af2adc30522aa8f9a170501


?>