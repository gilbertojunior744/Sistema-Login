<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<?php
    $id = $_GET['id'];
    include_once("conexao/conexao.php");
    
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id= '$id' ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row ) {
    
?>


<body>
    <form action="crud/update.php<?php echo "?id=".$row['id'] ;?>" method="POST">
    <img src="img/logo.png"> 
    <h2>Editar Usuário</h2>   
    <label class="form-label">Nome:</label></br>
    <input type="text" class="form-control" name="nome" value="<?php echo $row['nome'] ; ?>"></br>
    <label class="form-label">Email:</label></br>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ; ?>">
    <label class="form-label">Senha:</label></br>
    <input type="password" class="form-control" name="senha" value="<?php echo $row['senha'] ; ?>"></br></br>

        <button class="btn btn-outline-primary btn-lg" type="submit">Salvar</button>
        <a href="crud/read.php"><button class="btn btn-outline-danger btn-lg">Voltar</button></a>
        
    </form>


    <?php
        }
    ?>

</body>

</html>