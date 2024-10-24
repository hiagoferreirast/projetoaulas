<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>terceiro 2</title>
</head>
<body>
<?php  
    $idade=60;
    $sexo='M';
    if($sexo=="M" and $idade>=65 ){
        echo "Você irá aposentar ";
    }
    elseif($sexo=='M'){
        echo"Você ainda não irá aposentar";
    }
    if($sexo=="F" and $idade>=62 ){
        echo "Você irá aposentar ";
    }
    elseif($sexo=='F'){
        echo"Você ainda não irá aposentar";
    }
?>
</body>
</html>