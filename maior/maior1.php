<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maior e Menor que 5</title>
 
</head>

<body> 
  
	  <form method="post" class="maior" action="maior1.php"> 
      <center>
        <h3> Programa maior ou menor que 5</h3>
        <br>
		      
            Digite um número: <input type="number" name="numero" required>
        <br><br><br>
	
			  <input type="submit" name="acao" value="Enviar">

        <br><br>    

            <?php 

                      if ($_POST["acao"]){

                          $num = $_POST["numero"]; 

                              echo "O número digitado foi: ", $num;
                              echo "<br>";                                   
                              if ($num > 5) {
                                  echo "Este número é maior que 5";	
                              }
                              else {
                                echo "Este número é menor que 5";
                              }
                      } 
            ?>            
     </center>   
  </form>	           

</body>
</html>
