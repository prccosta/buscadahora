<?php
require("validate.php");

require_once("../conexao.php");
require_once("../connbasic.php");

$user_id = $_SESSION['user_id'];
$sql=mysql_query("SELECT * FROM vendedor WHERE id = '$user_id'");
$res=mysql_fetch_array($sql)
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title>
<script type="text/javascript">
			function FormataCep(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("/", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 9)
				{
					if (tam == 6)
						campo.value = vr.substr(0, 5) + '-';
				}
			}
			function fone(obj,prox) {
				switch (obj.value.length) {
					case 1:
						obj.value = "(" + obj.value;
						break;
					case 3:
						obj.value = obj.value + ")";
						break;	
					case 8:
						obj.value = obj.value + "-";
						break;	
					case 13:
						prox.focus();
						break;
				}
			}
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
</script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript">
      
      $(document).ready(function(){
         
         $("select[name=categoria]").change(function(){
            $("select[name=subcategoria]").html('<option value="0">Carregando...</option>');
            
            $.post("remote.php", 
                  {categoria:$(this).val()},
                  function(valor){
                     $("select[name=subcategoria]").html(valor);
                  }
                  )
            
         })
      })
      
</script>
    <link href="css/geral.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]>
<link href="css/geral_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

	<style type="text/css">
<!--
body {
	background-color: #C0C0C0;
}

-->
    </style>

</head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php');?>
				<div id="edicoes">
					<div id="tit">
                    	<p>Cadastro de Produtos</p>
                    </div>
					<?php
								if(isset($_GET['e']))
								{
									if($_GET['e']==1)
									{
										echo '<p>Operação feita com sucesso.</p><br />';
									}else
									if($_GET['e']==2)
									{
										echo '<p>Houve um erro na consulta ao banco de dados.</p><br />';
									}
								}
					?>
				  <br />
					
					<p>&nbsp;</p>
<FORM action="sql_produtos.php" method="post" name="vendedor">
<table align="center" border="1" width="935" class="tabela">
<tr align="center" class="style8">
  <td colspan="4"><b> DADOS DO PRODUTO </b></td>
</tr>
<tr align="left">
  <td width="222">CATEGORIA:</td>
  <td width="484">
  <label>
  <select name="categoria" class="azul">
    <option value="0">-- Categoria --</option>
  <?php
	$sql2 = "SELECT * FROM categorias order by nome ASC";
	$qr = mysql_query($sql2) or die(mysql_error());
	while($ln = mysql_fetch_assoc($qr)){
	 echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
	}
	?>
  </select>
  </label></td></tr>
<tr align="left">
  <td width="222">SUB-CATEGORIA:</td>
  <td width="484">
  <label>
  <select name="subcategoria" class="azul">
       <option value="0" disabled="disabled">Escolha uma Categoria Primeiro </option>
    </select>
  </label></td></tr>
<tr align="left">
  <td width="222">FABRICANTE:</td>
  <td width="484">
  <input name="fabricante" type="text" id="fabricante" size="70" maxlength="70" class="tabela"></td></tr>
<tr align="left">
  <td width="222">MODELO:</td>
  <td width="484">
  <input name="modelo" type="text" id="modelo" size="70" maxlength="70" class="tabela"></td></tr>
<tr align="left">
  <td>ESPECIFICA&Ccedil;&Atilde;O:</td>
  <td><label>
    <textarea name="especificacao" cols="40" rows="5" id="especificacao" class="tabela"></textarea>
  </label></td></tr>
<tr align="left">
  <td>PRE&Ccedil;O:</td>
  <td><label>
  <input name="preco" type="text" id="preco" size="15" maxlength="10" onkeypress="return(MascaraMoeda(this,'.',',',event))" class="tabela">
</label></td></tr>
<tr align="left">
  <td>EMPRESA:</td>
  <td><label>
  <input name="empresa" type="text" id="empresa" size="110" maxlength="110" value="<?php echo $res['empresa']; ?>" class="tabela" readonly>
</label></td></tr>
<tr align="left">
  <td>LOCAL:</td>
  <td><label>
  <input name="local" type="text" id="local" size="110" maxlength="110"  value="<?php echo $res['bairro']; ?>" class="tabela" readonly>
  <input name="id_vendedor" type="hidden" id="id_vendedor" size="20" maxlength="20"  value="<?php echo $res['id']; ?>" class="tabela" readonly>
</label></td></tr>
<tr align="center"><td colspan="4"><p><br>
  <INPUT class=botoes id=Enviar type=submit value=Cadastrar name=Enviar>
  <label>
    <input type="reset" name="limpar" id="limpar" value="Limpar">
    </label>
  </p>
  <p>&nbsp; </p></td></tr>
</table>
</FORM>
					

		  </div>
			</div>
            <div id="rodape"></div>

	</body>
</html>