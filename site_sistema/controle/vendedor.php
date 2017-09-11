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
                    	<p>Cadastro de Vendedores</p>
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
<FORM action=sql_vendedor.php method=post name=vendedor id=vendedor>
<table align="center" border="1" width="935" class="tabela">
<tr align="center" class="style8">
  <td colspan="4"><b> DADOS DO VENDEDOR </b></td>
</tr>
<tr align="left"><td width="222">NOME DA EMPRESA:</td>
<td width="484">
  <input name="empresa" type="text" id="empresa" size="70" maxlength="70"></td></tr>
<tr align="left">
  <td width="222">ENDERE&Ccedil;O:</td>
  <td width="484">
  <input name="endereco" type="text" id="endereco" size="70" maxlength="70"></td></tr>
<tr align="left">
  <td>BAIRRO:</td>
  <td><label>
  <input name="bairro" type="text" id="bairro" size="70" maxlength="70">
  </label></td></tr>
<tr align="left">
  <td>CIDADE:</td>
  <td><label>
  <input name="cidade" type="text" id="cidade" size="70" maxlength="70">
  </label></td></tr>
<tr align="left">
  <td>ESTADO:</td>
  <td><label>
  <input name="estado" type="text" id="estado" size="70" maxlength="70">
</label></td></tr>
<tr align="left">
  <td>CEP:</td>
  <td><label>
  <input name="cep" type="text" id="cep" size="15" maxlength="9" onkeyup="FormataCep(this,event)">
</label></td></tr>
<tr align="left">
  <td>TELEFONE:</td>
  <td><label>
  <input name="telefone" type="text" id="telefone" size="15" maxlength="13" onkeyup="fone(this,event)">
</label></td></tr>
<tr align="left">
  <td>E-MAIL:</td>
  <td><label>
  <input name="email" type="text" id="email" size="70" maxlength="50">
</label></td></tr>
<tr align="left">
  <td>SITE:</td>
  <td><label>
  <input name="site" type="text" id="site" size="70" maxlength="50">
</label></td></tr>
<tr align="left">
  <td>INFORMA&Ccedil;&Otilde;ES:</td><td><label>
  <textarea name="obs" cols="40" rows="5" id="obs"></textarea>
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