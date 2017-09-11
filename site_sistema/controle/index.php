<?php
session_start();
require "../conexao.php";

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
#login {
	width: 357px;
	height: 388px;
	background-image: url(images/login.png);
}
#senha {
	position: fixed;
	margin-top:230px;
	margin-left: 130px;	
}
body {
	background-image:url(../../images/fundo.jpg);
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	font-weight: bold;
	color:#669999;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.btn {
	width:95;
	height: 23px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bold;
}
#style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight: bold;
	text-align:center;
	color: #FFFFFF;
	padding-bottom: 5px;
}
-->
</style>
<title>::. Busca da Hora - O seu site de buscas de S&atilde;o Paulo .::</title></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" scroll="no">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle"><table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><div id="login">
		  <div id="senha">
		    <table border="0" cellspacing="2" cellpadding="2">
              <form action="valida.php" name="login" method="post">
                <tr>
                  <td width="43"><span class="style2">Login</span></td>
                  <td width="144"><input name="login" type="text" class="glowForm"></td>
                </tr>
                <tr>
                  <td class="style2">Senha</td>
                  <td><input name="senha" type="password" class="glowForm"></td>
                </tr>
                <tr>
                  <td colspan="2" class="fontPreta"><div align="right">
                      <input name="clear" class="btn" type="reset"  value="Limpar">
					  
                      <input name="Submit" class="btn" type="submit" value="Logar">
                  </div></td>
                </tr>
              </form>
		      </table>
		    
		    </div>
		  </div></td>
        </tr>
      </table>      </td>
  </tr>
</table>
<?php
					  if(isset($_SESSION['erro']))
					{						
						echo ' <script language="javascript"> alert("'.$_SESSION['erro'].'")</script>';
						session_destroy(); 
					}
			  ?>
</body>
</html>
