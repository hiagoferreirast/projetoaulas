<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Recebidos do HTML</h1>
    <?php
    echo $_POST["nome"];
    ?>
    ! <br>
    Você nasceu em 
    <?php
    echo $_POST["mes"];
    ?>
</body>
</html>