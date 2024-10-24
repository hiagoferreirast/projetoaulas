<!DOCTYPE html>
<html>
  <!-- DESENVOLVIDO POR DENILSON SAMPAIO PACHECO | Email: denilson@bcena.com -->
<head>
<meta charset="utf-8"/>
<title>Cálculo do INSS</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

<table width="1024" border="1" align="center" bordercolor="#FFC700" bgcolor="#FFFFFF">
  <tr>
    <td height="193" colspan="4"><table width="1024" height="187" border="0">
      <tr>
        <td width="1013" height="183"><img src="img/logo_senac.png" width="400" height="234" /></td>
        <td width="10">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr bordercolor="#FFC000">
    <td width="224" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="index.html">HOME PAGE</a></span></div></td>
    <td width="255" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="empresa.html">EMPRESA</a></span></div></td>
    <td width="279" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="produtos.html">PRODUTOS</a></span></div></td>
    <td width="248" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="contato.html">CONTATO</a></span></div></td>
  </tr>
  <tr>
    <td height="466" colspan="4" bgcolor="#FFC700">
		
	
	  <div align="center">
	  
	  


	  <form method="post" class="inss" action="inss.php"> 
        <h3> CÁLCULO DO INSS</h3>
        <br>
		      
            Nome:&nbsp <input type="text" name="nome" placeholder="Digite seu nome*" required>
            <br>
            <br>
            <br>
            Salário: <input type="text" name="salario" placeholder="Digite o salário*" required>
        <br>
        <br>
        <br>
	
			<center><input type="submit" name="acao" value="Calcular">
			<p> 
			
			
			
			<table width="335" height="96" border="1">
  <tr>
    <td width="325" height="48" bgcolor="#FFFFFF"><div align="center">
	
	
	        <?php 

            if ($_POST["acao"]){

                $nome=$_POST["nome"];
                $sal=$_POST["salario"];
                    
                    if ($sal <= 1320.00) {
                        $inss = ($sal*7.5)/100;
						            echo "Nome: ", $nome;
						            echo "<br>";
						            echo "Salário Bruto: ", $sal;
						            echo "<br>";
						            echo "Desconto do INSS: ", $inss;
						            echo "<br>";
						            echo "Salário Líquido: ", $sal - $inss;						
                    }    
                                            
                        elseif ($sal >= 1320.01 and $sal <= 2571.29) {
                          $inss = ($sal*9)/100;
						              echo "Nome: ", $nome;
						              echo "<br>";
						              echo "Salário Bruto: ", $sal;
						              echo "<br>";
						              echo "Desconto do INSS: ", $inss;
						              echo "<br>";
						              echo "Salário Líquido: ", $sal - $inss;			
                        }

                        elseif ($sal >= 2571.30 and $sal <= 3856.94) {
                          $inss = ($sal*12)/100;
						              echo "Nome: ", $nome;
						              echo "<br>";
						              echo "Salário Bruto: ", $sal;
						              echo "<br>";
						              echo "Desconto do INSS: ", $inss;
						              echo "<br>";
						              echo "Salário Líquido: ", $sal - $inss;			
                        }

                        elseif ($sal > 3856.94) {
                          $inss = ($sal*14)/100;
						              echo "Nome: ", $nome;
						              echo "<br>";
						              echo "Salário Bruto: ", $sal;
						              echo "<br>";
						              echo "Desconto do INSS: ", $inss;
						              echo "<br>";
						              echo "Salário Líquido: ", $sal - $inss;			
                        }
            }
        
        ?>        	
		
	</div></td>
  </tr>
</table>
			</center>
    </form>	
	  
	  
	  
	  
	  
    </div></td>
  </tr>
  <tr>
    <td height="76" colspan="4" bordercolor="#FFC700" bgcolor="#FFC700">&nbsp;</td>
  </tr>
</table>



</body>
</html>
