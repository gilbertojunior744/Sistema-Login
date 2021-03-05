<?php
    include_once("../conexao/conexao.php");
    
    $email = $_POST['email'];
    
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($result) > 0){

        echo "Sua senha foi enviada para seu email";
    }else{

        echo "Email não cadastrado";
    }
    
    

?>