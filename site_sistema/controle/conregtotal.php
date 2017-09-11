<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$sql=mysql_query("SELECT * FROM cadastro WHERE pessoa = 'física'");
$sql2=mysql_query("SELECT * FROM cadastro WHERE pessoa = 'jurídica'");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>::. Blush!'s World - &Aacute;rea Administrativa .::</title>	
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
    </style></head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php');?>
				<div id="edicoes">
					<div id="tit">
                    	<p>Consulta dos Registros do Sistema</p>
                    </div><br>
                    
					<br />
					
<?php
$total=mysql_num_rows($sql);
$total2=mysql_num_rows($sql2);

echo "<div align='center' class='tittabela2'><br><table align='center' border='1' width='500'>
<tr>
<tr><th align='left'>Total de Pessoas Físicas:</th><td align='center'> ".$total." </td></tr>
<tr><th align='left'>Total de Pessoas Jurídicas:</th><td align='center'> ".$total2." </td></tr>
</table></div>";

?>

</div>
</div>
<div id="rodape"></div>

	</body>
</html>