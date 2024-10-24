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
    <td width="224" height="57" bgcolor="#FFC801"><div align="center"><a href="index.html"><img src="img/menu01.jpg" width="185" height="57" border="0" /></a></div></td>
    <td width="255" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="empresa.html">EMPRESA</a></span></div></td>
    <td width="279" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="produtos.html">PRODUTOS</a></span></div></td>
    <td width="248" height="57" bgcolor="#FFC801"><div align="center"><span class="style3"><a href="contato.html">CONTATO</a></span></div></td>
  </tr>
  <tr>
    <td height="699" colspan="4" bgcolor="#FFC700">	
	  <div align="center">
	  
	  
	  <form method="post" class="contato" action="contato.php"> 
      <h3> Programa Sexo da Pessoa </h3>
      <br>
			<br>       
          Informe seu sexo:
			<br>
      <br>
          <input type="radio" name="sexo" value="m">Masculino
          <input type="radio" name="sexo" value="f">Feminino
      <br>
      <br>		
			   <center><input type="submit" name="acao" value="Enviar">
			   <p>
			   
			   <table width="400" border="1">
  <tr>
    <td height="42"><div align="center">
	
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
