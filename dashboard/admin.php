<?php
    include_once("../conexao/conexao.php");
    session_start();
    if($_SESSION['nivel'] != 'Admin'){
        header("Location:../index.html");
    }else{

    $stmt = $conn->prepare("SELECT * FROM usuarios ORDER BY nome");
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
    <title>Read</title>
</head>
<body>
    <nav>
        <h3>Painel Admin</h3>

    </nav>

    
    <table class="table caption-top">
        <p class="text-light"><?php echo "Bem vindo $_SESSION[nome]" ;?></p>
        <caption><h1>Usuários</h1> - Lista de usuários</caption>
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">SENHA</th>
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
            <td><?php echo $row['senha'] ; ?></td>
            <td><?php echo "<a href='../update.php?id=".$id."'><button class='btn btn-primary'>Editar</button></a>  <a href='delete.php?id=".$id."'><button class='btn btn-danger'>Excluir</button></a>"; ?></td>
        </tr>
        <?php } ?>
        </tbody>

        
    </table>
    <a href="../create.html">
        <button class="btn btn-warning">Novo Usuário</button>
    </a>

        
</body>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>