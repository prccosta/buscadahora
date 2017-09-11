<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>	
	<link href="css/geral.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]>
	<link href="css/geral_ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	<style type="text/css">
<!--
body {
	background-color: #e3a4b6;
}

-->
    </style>
	
    </head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php');?>
				<div id="edicoes">
					<div id="tit">
                    	<p>Consulta, Altera&ccedil;&atilde;o e Exclus&atilde;o de Produtos e Vendedores</p>
                    </div>
					<?php
								if(isset($_POST['e']))
								{
									if($_POST['e']==1)
									{
										echo '<p>Operação feita com sucesso.</p><br />';
									}else
									if($_POST['e']==2)
									{
										echo '<p>Houve um erro na consulta ao banco de dados.</p><br />';
									}
								}
					?>
				  <br />
					
                    
<table align="center" border="0" width="920">
<tr align="center" class="style8">
  <td colspan="4"><b> Digite o nome da Empresa ou o modelo do Produto e clique em Pesquisar: </b></td>
</tr>
<tr><td colspan="4"><br></td></tr>
<tr align="left"><form name="form1" method="post" action="convendedor.php">
  <td width="127">Por Vendedor</td>
  <td width="632">
    <label>
    <input name="empresa" type="text" id="empresa" size="70" maxlength="70">
    </label>
  
    <span class="formato">Digite a palavra toda</span></td>
  <td width="147"><input type="submit" name="pesquisar" id="pesquisar" value="Pesquisar"></td></form>  </tr><br>
<tr align="left"><form name="form1" method="post" action="conproduto.php">
  <td width="127">Por Produto</td>
  <td>
    <label>
    <input name="modelo" type="text" id="modelo" size="70" maxlength="70">
    </label>
  
    <span class="formato">Digite a palavra toda</span></td>
  <td><input type="submit" name="pesquisar" id="pesquisar" value="Pesquisar"></td></form>  </tr>
</table>
		  </div>
			</div>
    <div id="rodape"></div>

	            </body>
</html>