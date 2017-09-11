<?php
require("validate.php");
require("../class.upload.php");
require("../conexao.php");
require("../connbasic.php");

$pasta = '../imagens/';	


if(isset($_POST['novacategoria']))
{
		
		$nome = $_POST['titulo'];	
		$texto = $_POST['texto'];	
		
		if(strlen($_FILES['img']['name'])>0)
		{				
			$handle = new Upload($_FILES['img']);
			  
			if ($handle->uploaded) 
			{
					
					$handle->image_convert = 'jpg';				
					$handle->file_name_body_add = 'cat';			
					//$handle->image_resize            = true;
					//$handle->image_x                 = 250;
					//$handle->image_y                 = 300;
						   
					$handle->Process($pasta); // passa para uma pasta definitiva					
					
					if ($handle->processed) 
					{		
							$img = $handle->file_dst_name;	
													
					} else 
					{						
							echo 'Erro no processamento da imagem';
					}
					
			}else
			{
				echo 'Erro no upload';
			}
		}
		
		//echo $img;
		
		$sql = "INSERT INTO `categorias` ( `id` , `id_parent` , `nome` , `texto` , `img` ) VALUES (NULL, '0', '$nome', '$texto', '$img');";
		
		if(mysql_query($sql))
		{
			header("Location: categorias.php?e=1");
		}else
		{
			header("Location: categorias.php?e=2");
		}
}else
if(isset($_POST['editarcategoria']))
{
		
		$id = $_POST['editarcategoria'];	
		$nome = $_POST['titulo'];	
		$texto = $_POST['texto'];	
		
		$w = mysql_fetch_array(mysql_query("SELECT _img FROM categorias WHERE id='$id' LIMIT 1"));
		$img = $w['img'];
	
		
		if(strlen($_FILES['img']['name'])>0)
		{				
			$handle = new Upload($_FILES['img']);
			if(is_file($pasta . $img)){unlink($pasta . $img);}
			  
			if ($handle->uploaded) 
			{
					
					$handle->image_convert = 'jpg';				
					$handle->file_name_body_add = 'cat';			
					//$handle->image_resize            = true;
					//$handle->image_x                 = 250;
					//$handle->image_y                 = 300;
						   
					$handle->Process($pasta); // passa para uma pasta definitiva					
					
					if ($handle->processed) 
					{		
							
							$img = $handle->file_dst_name;	
													
					} else 
					{						
							echo 'Erro no processamento da imagem';
					}
					
			}else
			{
				echo 'Erro no upload';
			}
		}
		
		
		
		$sql = "UPDATE `categorias` SET `nome` = '$nome', `texto` = '$texto', `img` = '$img' WHERE `categorias`.`id` = '$id' LIMIT 1 ";
		
		if(mysql_query($sql))
		{
			header("Location: categorias.php?e=1");
		}else
		{
			header("Location: categorias.php?e=2");
		}
}else
if(isset($_POST['apagarcategoria']))
{
		
		$id = $_POST['apagarcategoria'];	
		
		$w = mysql_fetch_array(mysql_query("SELECT img FROM categorias WHERE id='$id' LIMIT 1"));
		$img = $w['img'];
		
		if(is_file($pasta . $img)){unlink($pasta . $img);}
		
		
		$query = mysql_query("SELECT img FROM subcategorias WHERE id_parent='$id'");
		while($y = mysql_fetch_array($query))
		{
			$img = $y['img'];
			if(is_file($pasta . $img)){unlink($pasta . $img);}
		}
		
		$sql = "DELETE FROM categorias WHERE id='$id' LIMIT 1 ";
		$sql2 = "DELETE FROM subcategorias WHERE id_parent='$id'";
		
		if(mysql_query($sql) && mysql_query($sql2))
		{
			header("Location: categorias.php?e=1");
		}else
		{
			header("Location: categorias.php?e=2");
		}
}
		
		


?>