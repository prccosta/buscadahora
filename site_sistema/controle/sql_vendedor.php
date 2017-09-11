<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>
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

$sql=mysql_query("INSERT INTO `vendedor` set
empresa='$empresa',
endereco='$endereco',
bairro='$bairro',
cidade='$cidade',
estado='$estado',
cep='$cep',
telefone='$telefone',
email='$email',
site='$site',
obs='$obs',
DataCadastro=now()") or die ( mysql_error());

$palavra = $_POST['empresa'];
$consulta=mysql_query("SELECT * FROM vendedor WHERE empresa = '$palavra'");
$exibe=mysql_fetch_array($consulta);

if($sql){
echo "<br><br><font color='#ffffff' face='Trebuchet MS'><center>O cadastro foi efetuado com sucesso!<br><br>O número do ID é: </font><font color='#FF0000' face='Trebuchet MS'><strong>".$exibe['id']."</strong></font><font color='#ffffff' face='Trebuchet MS'><br><br>Anote esse número para cadastrar o ID no login do vendedor.<br><br>Clique <a href='admin.php'>Aqui</a> para voltar para página inicial!</font>";
} else {
echo "Ocorreu um erro durante o cadastro!<br>Clique <strong><a href='admin.php'>Aqui</a></strong> para voltar para página inicial!";
}
?>