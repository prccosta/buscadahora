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
				return confirm('Deseja realmente apagar essa categoria e suas sub-categorias?');
			} 	
			
			function Con2()
			{
				return confirm('Deseja realmente apagar essa foto?');
			} 		
		</script>
<style type="text/css">
body {
	background-color: #C0C0C0;
}
</style>
	</head>
	<body>
			
		<div id="centrar"> 
			 <?php include_once('inc_topmenu.php'); ?>
				<div id="edicoes">
					<div id="tit">                    
                   	  <p>Categorias</p>
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
										 <a href="categorias.php?action=novo"><img border=0 src="images/icones/add.png"> Nova Categoria</a>
										 </div><br />
											
										 <table width="80%" border="0" cellspacing="0" cellpadding="0" id="lista">
											 <tr>
												<th width="80%" scope="col">TÍTULO</th>
												<th width="10%" scope="col">EDITAR</th>
												<th width="10%" scope="col">APAGAR</th>
											  </tr>';
											  
											$_pagi_sql = "SELECT id, nome FROM categorias WHERE id_parent=0 AND id > 1 ORDER BY nome";
											
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
											
												$nr = mysql_num_rows(mysql_query("SELECT * FROM categorias WHERE id_parent=".$r['id']." "));
												$fotos = $nr .' sub-categorias';
												
												if($nr<=0){	$fotos = 'sub-categorias'; }
												if($nr==1){	$fotos = $nr .' sub-categoria'; }
											
											
																
												echo '<tr>
														<td>'. $r['nome'] . '</td>
														<td><a href="categorias.php?action=editar&id='.$r['id'].'"><img border="0" src="images/icones/editar.jpg"></a></td>
														<td><form action="sql_categorias.php" method="post" enctype="multipart/form-data"> <input type="hidden" name="apagarcategoria" value="'.$r['id'].'"><input onClick="return Con()" type="image" src="images/icones/excluirgif.gif"></form></td>
													  </tr>';
											}
											
											//Incluimos a barra de navegação
																		
											echo '</table><br />';
											
											echo"<p class='fonte_peq'>Pág.: ".$_pagi_navegacion."</p>"; 	
											
                  
                
								}else // fim do NO ACTION
								if($_GET['action']=='novo')
								{
									
									echo '<div id="menu2">
										 		<a href="categorias.php"><img border=0 src="images/icones/add.png"> Voltar à lista</a>
										  </div><br /><br />
										  
										   <form action="sql_categorias.php" method="post" enctype="multipart/form-data">
										   <input type="hidden" name="novacategoria" value="1">
										   
											<table width="100%" border="0" cellspacing="0" cellpadding="0" id="bemvindo">
											
											  <tr>
												<td width="179">Título:</td>
												<td width="321"><input name="titulo" type="text" size="30" maxlength="30" value=""></td>
											  </tr>
											  
											  <!--<tr>
												<td width="179">Texto:</td>
												<td width="321">
												<textarea name="texto" cols="50" rows="3"></textarea></td>
											  </tr>
											  
											  <tr>
												<td>Imagem(Não obrigatória)</td>
												<td>
												<img src="../imagens/' . $r['img'] . '" width="80" height="80"><br />
												<input name="img" type="file" size="30">
												</td>
											  </tr>-->
											  
											  <tr>
												<td><input name="" type="submit" value="Inserir"></td>                        
											  </tr>
											  
											</table>						
											
											</form>';
											
								}else // FIM DO NOVO
								if($_GET['action']=='editar')
								{	
										
										
										$id = $_GET['id'];
										$r = mysql_fetch_array(mysql_query("SELECT nome, texto, img FROM categorias WHERE id='$id' LIMIT 1"));
																				
										echo '<div id="menu2">
										 		<a href="categorias.php"><img border=0 src="images/icones/add.png"> Voltar à lista</a>
										  </div><br />
										  
										   <form action="sql_categorias.php" method="post" enctype="multipart/form-data">
										   <input type="hidden" name="editarcategoria" value="'.$id.'">
										   
											<table width="100%" border="0" cellspacing="0" cellpadding="0" id="bemvindo">
											
											  <tr>
												<td width="179">Título:</td>
												<td width="321"><input name="titulo" type="text" size="30" maxlength="30" value="' . $r['nome'] . '"></td>
											  </tr>
											  
											  <!--<tr>
												<td width="179">Texto:</td>
												<td width="321">
												<textarea name="texto" cols="50" rows="3">' . $r['texto'] . '</textarea></td>
											  </tr>
											  
											  <tr>
												<td>Imagem(Não obrigatória)</td>
												<td>
												<img src="../imagens/' . $r['img'] . '" width="80" height="80"><br />
												<input name="img" type="file" size="30">
												</td>
											  </tr>-->
											  
											  <tr>
												<td><input name="" type="submit" value="Inserir"></td>                        
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