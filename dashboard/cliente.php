<?php
    include_once("../conexao/conexao.php");

    $id = $_GET['id'];

    session_start();
    if($_SESSION['nivel'] != 'Cliente'){
        header("Location:../index.html");
    }else{

    $stmt = $conn->prepare("SELECT * FROM usuarios Where id='$id'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
   ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <nav>
        <h3>Painel Cliente</h3>

    </nav>

    
    <table class="table caption-top">
        <caption><h1><?php echo $_SESSION['nome'] ;?></h1> - Meus Dados login</caption>
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">AÇÕES</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($result as $row ) {
            $id = $row['id'];
         ?>
        <tr>
            <td scope="row"><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['nome'] ; ?></td>
            <td><?php echo $row['email'] ; ?></td>
            <td><?php echo "<a href='../update.php?id=".$id."'><button class='btn btn-primary'>Editar</button></a>"; ?></td>
        </tr>
        <?php } ?>
        </tbody>

        
    </table>
    

        
</body>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>