<?php
require("validate.php");
require("../conexao.php");
require("../connbasic.php");
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
        <script language="javascript">
			function Con()
			{
				return confirm('Deseja realmente apagar essa usuário?');
			} 	
			
				
		</script>

	<style type="text/css">
<!--
body {
	background-color: #C0C0C0;
}
-->
</style></head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php'); ?>
				<div id="edicoes">
					<div id="tit">                    
                   	  <p>Usuários CLIENTES</p>
                    </div><br>
                    		<?php
								if(isset($_GET['e']))
								{					
									if($_GET['e']==1)
									{
										echo "<p class='vermelho'>Operação feita com sucesso.</p><br />";
									}else						
									if($_GET['e']==2)
									{
										echo "<p class='vermelho'>Houve um erro na consulta ao banco de dados.</p><br />";
									}					
								}					
							?>			                    				
				  <br />
                   			<?php
							
							
							
								if(!isset($_GET['action']))
								{	
								
										 echo '
										 <div id="menu2">
										 <a href="users.php?action=novo"><img border=0 src="images/icones/add.png"> Novo Usuário</a>
										 </div><br />
											
										 <table width="80%" border="0" cellspacing="0" cellpadding="0" id="lista">
											 <tr>
												<th width="40%" scope="col">TÍTULO</th>
												<th width="40%" scope="col">LOGIN</th>
												<th width="10%" scope="col">EDITAR</th>
												<th width="10%" scope="col">APAGAR</th>
											  </tr>';
											  
											$_pagi_sql = "SELECT id, login, nome FROM users ORDER BY nome";
											
											//quantidade de resultados por página (opcional, por padrão 20)
											$_pagi_cuantos = 10;
											
											//quantidade de links na barra de navegação
											$_pagi_nav_num_enlaces = 5;
											
											$_pagi_nav_anterior  = "<";
											$_pagi_nav_siguiente = ">";
											$_pagi_nav_primera   = "PRIMEIRA";
											$_pagi_nav_ultima    = "ÚLTIMA";
											$_pagi_separador     = " ";
											
											//Incluímos o script de paginação. Este já executa a consulta automaticamente
											require("../paginator.inc.php");
											
											//Lemos e escrevemos os registros da página atual
											while($r = mysql_fetch_array($_pagi_result))
											{				
												echo '<tr>
														<td>'. $r['nome'] . '</td>
														<td>'. $r['login'] . '</td>
														<td><a href="users.php?action=editar&id='.$r['id'].'"><img border="0" src="images/icones/editar.jpg"></a></td>
														<td><form action="sql_users.php" method="post" enctype="multipart/form-data"> <input type="hidden" name="apagaruser" value="'.$r['id'].'"><input onClick="return Con()" type="image" src="images/icones/excluirgif.gif"></form></td>
													  </tr>';
											}
											
											//Incluimos a barra de navegação
																		
											echo '</table><br />';
											
											echo"<p class='fonte_peq'>Pág.: ".$_pagi_navegacion."</p>"; 	
											
                  
                
								}else // fim do NO ACTION
								if($_GET['action']=='novo')
								{
									
									echo '<div id="menu2">
										 		<a href="users.php"><img border=0 src="images/icones/add.png"> Voltar à lista</a>
										  </div><br /><br />
										  
										   <form action="sql_users.php" method="post" enctype="multipart/form-data">
										   <input type="hidden" name="novouser" value="1">
										   
											<table width="100%" border="0" cellspacing="0" cellpadding="0" id="bemvindo">
											
											  <tr>
												<td width="179">ID Vendedor:</td>
												<td width="321"><input name="id" type="text" size="30" maxlength="9" value=""></td>
											  </tr>
											  <tr>
												<td width="179">Nome:</td>
												<td width="321"><input name="nome" type="text" size="30" maxlength="30" value=""></td>
											  </tr>
											  
											  <tr>
												<td width="179">Login:</td>
												<td width="321"><input name="login" type="text" size="30" maxlength="30" value=""></td>
											  </tr>
											  
											   <tr>
												<td width="179">Senha:</td>
												<td width="321"><input name="senha" type="text" size="30" maxlength="30" value=""></td>
											  </tr>
											  <tr>
												<td><input name="" type="submit" value="Inserir"></td>                        
											  </tr>
											</table>
											</form>';
											
								}else // FIM DO NOVO
								if($_GET['action']=='editar')
								{	
										
										
										$id = $_GET['id'];
										$sql = mysql_query("SELECT * FROM users WHERE id = '$id' LIMIT 1");
										$r = mysql_fetch_array($sql);
																				
										echo '<div id="menu2">
										 		<a href="users.php"><img border=0 src="images/icones/add.png"> Voltar à lista</a>
										  </div><br /><br>
										  
										   <form action="sql_users.php" method="post" enctype="multipart/form-data">
										   <input type="hidden" name="editaruser" value="'.$id.'">
										   
											<table width="100%" border="0" cellspacing="0" cellpadding="0" id="bemvindo">
											
											  <tr>
												<td width="179">ID Vendedor:</td>
												<td width="321"><input name="id" type="text" size="30" maxlength="9" value="' . $r['id_vendedor'] . '" readonly></td>
											  </tr>
											  <tr>
												<td width="179">Nome:</td>
												<td width="321"><input name="nome" type="text" size="30" maxlength="30" value="' . $r['nome'] . '"></td>
											  </tr>
											  
											  <tr>
												<td width="179">Login:</td>
												<td width="321"><input name="login" type="text" size="30" maxlength="30" value="' . $r['login'] . '"></td>
											  </tr>
											  
											  <tr>
												<td width="179">Senha:</td>
												<td width="321"><input name="senha" type="text" size="30" maxlength="30" value="' . $r['senha'] . '"></td>
											  </tr>
											  <tr>
												<td><input name="" type="submit" value="Atualizar"></td>                        
											  </tr>
											  
											</table>						
											
											</form>';
									
									
								}
								
																				
							?>
                    
		  </div>
</div> 
				<div id="rodape"></div>		
	            
    <p>&nbsp;</p>
</body>
</html>