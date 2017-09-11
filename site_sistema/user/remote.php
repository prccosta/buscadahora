<?php
header('Content-Type: text/html; charset=ISO-8859-1');
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$categoria = $_POST['categoria'];

$sql3 = "SELECT * FROM subcategorias WHERE nome_cat = '$categoria' ORDER BY nome ASC";
$qr = mysql_query($sql3) or die(mysql_error());

if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não existem Subcategorias nessa Categoria').'</option>';
   
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
   }
}

?>