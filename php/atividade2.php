<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <?php
    for($i=0;$i<=30;$i++){
        if($i%4==0&&$i%6==0){
            echo"<b><i>$i</b></i><br>";
        }
        elseif($i%4==0){
            echo"<b>$i</b><br>";
        }
        elseif($i%6==0){
            echo"<i>$i</i><br>";
        }
        else
            echo"$i <br>";
    }
    ?>
</body>
</html>