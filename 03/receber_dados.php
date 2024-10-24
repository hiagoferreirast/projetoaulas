<html>
<head>
    <title>Exercício 03</title>
    <meta charset="utf-8"/>   
</head>

<body>
<h1> PROGRAMA SEXO DA PESSOA </h1>
  <?php 

      if ($_POST["acao"]){ 

       $radio=$_POST["sexo"]; 

         if ($radio=="m"){ 
            echo "Pessoa do sexo masculino."; 
         }

         elseif ($radio=="f") { 
            echo "Pessoa do sexo feminino."; 
         }   
      } 

   ?>
	
</body>
</html>
