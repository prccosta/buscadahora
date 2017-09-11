<?php
require("validate.php");
require("../class.upload.php");
require("../conexao.php");
require("../connbasic.php");

$pasta = '../imagens/';


if(isset($_POST['novasubcategoria']))
{

		$nome = $_POST['nome'];
		$texto = $_POST['texto'];
		$categoria = $_POST['categoria'];


		$sql = "INSERT INTO `subcategorias` ( `id` , `id_parent` , `nome` , `texto`  ) VALUES (NULL, '$categoria', '$nome', '$texto')";

		if(mysql_query($sql) or die(mysql_error()))
		{
			header("Location: subcategorias.php?e=1");
		}else
		{
			header("Location: subcategorias.php?e=2");
		}
}else
if(isset($_POST['editarsubcategoria']))
{

		$id = $_POST['editarsubcategoria'];
		$nome = $_POST['nome'];
		$texto = $_POST['texto'];
		$galeria = $_POST['galeria'];
		$categoria = $_POST['categoria'];


		$sql = "UPDATE `subcategorias` SET `id_parent` = '$categoria', `nome` = '$nome', `texto` = '$texto', `id_cat` = '$galeria' WHERE `subcategorias`.`id` = '$id' LIMIT 1 ";

		if(mysql_query($sql) or die(mysql_error()))
		{
			header("Location: subcategorias.php?e=1");
		}else
		{
			header("Location: subcategorias.php?e=2");
		}


}else
if(isset($_POST['apagarsubcategoria']))
{

		$id = $_POST['apagarsubcategoria'];

		$sql = "DELETE FROM subcategorias WHERE id='$id' LIMIT 1 ";

		if(mysql_query($sql))
		{
			header("Location: subcategorias.php?e=1");
		}else
		{
			header("Location: subcategorias.php?e=2");
		}
}
?>