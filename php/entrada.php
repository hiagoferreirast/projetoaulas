<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Os dados informados são:</h1>
    <?php
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $comentario=$_POST["comentario"];
    $senha1=$_POST["senha1"];
    $senha2=$_POST["senha2"];
    echo"<p style='color:blue;'>Olá $nome seja bem-vindo, seu e-mail é $email</p>";
    echo"<p style='color:red;'>Website: $website , comentário é $comentario</p>";
    ?>
    
    <br>
</body>
</html>