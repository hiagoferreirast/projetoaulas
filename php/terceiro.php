<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
$idade=62;
$sexo='F';
if($sexo=="F"){
    if($idade>=62){
        echo "Você irá aposentar ";
    }
    else{
        echo"Você ainda não irá aposentar";
    }
}
if($sexo=="M"){
    if($idade>=65){
        echo "Você irá aposentar ";
    }
    else{
        echo"Você ainda não irá aposentar";
    }
}
?>
</body>
</html>