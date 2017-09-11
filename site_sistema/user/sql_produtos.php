<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>
<link href="css/geral.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #C0C0C0;
}
-->
</style>

<?php
include "../conexao.php";
include "post.php";

$sql=mysql_query("INSERT INTO `produtos` set
categoria='$categoria',
subcategoria='$subcategoria',
fabricante='$fabricante',
modelo='$modelo',
especificacao='$especificacao',
preco='$preco',
empresa='$empresa',
local='$local',
id_vendedor='$id_vendedor',
DataCadastro=now()");

if($sql){
echo "<br><br><font color='#ffffff' face='Verdana'><center>O cadastro foi efetuado com sucesso!<br>Clique <a href='admin.php'>Aqui</a> para voltar para página inicial!</font>";
} else {
echo "Ocorreu um erro durante o cadastro!<br>Clique <strong><a href='admin.php'>Aqui</a></strong> para voltar para página inicial!";
}
?>