<?php
session_start();

require_once("../conexao.php");
require_once("../connbasic.php");



$login = $_POST['login'];
$senha = $_POST['senha'];


	$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' LIMIT 1";

	$q = mysql_fetch_row(mysql_query($sql));

	$n = mysql_num_rows(mysql_query($sql));

	if($n>0)
	{
		$_SESSION['user_id'] = $q[0];
		header("Location: admin.php");
	}else
	{
		header("Location: index.php");
		$_SESSION['erro'] = "Dados Errados";
	}
?>