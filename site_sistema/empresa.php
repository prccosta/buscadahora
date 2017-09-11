<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. EMPRESA - Busca da Hora - O seu site de buscas em S&atilde;o Paulo .::</title>
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas em SP">
<meta name="keywords" content="Comparação de preços, busca, Procura, Pesquisa, Preços, Computador, Informática. lojas de informática, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automação comercial, automacao comercial, PC, Servidores, CPU e Memória, Cooler (ventoinha), Memórias, Placas-Mãe, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Removíveis, DVD e DVDRW, Fitas, Mídias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multimídia, Caixas de Som, Câmeras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de Vídeo/Edição, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acessórios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Periféricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programação, Sistema Operacional, Sistemas, Software de Rede, Utilitários, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Segurança, Banda larga, Virtua, Velox, SP, São Paulo">
<meta name="author" content="Blush! Web e Publicidade - As melhores ideias estão aqui!">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/drop_down.js"></script>
<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
      <div class="container">
        <section id="content">
        <img src="images/logo.jpg"><br>
				<?php
                    $empresa = $_GET['empresa'];
					$consulta=mysql_query("SELECT * FROM vendedor WHERE empresa = '$empresa'");
					$res=mysql_fetch_array($consulta);
						echo "<br><table WIDTH='473'><tr><td colspan='2' align='center'><b>".$res['empresa']."</b></td></tr>
							  <tr><td colspan='2'><br></td></tr>
							  <tr><td align='right'><b>ENDEREÇO:&nbsp;</b></td><td>".$res['endereco']."</td></tr>
							  <tr><td align='right'><b>BAIRRO:&nbsp;</b></td><td>".$res['bairro']."</td></tr>
							  <tr><td align='right'><b>CIDADE:&nbsp;</b></td><td>".$res['cidade']."</td></tr>
							  <tr><td align='right'><b>CEP:&nbsp;</b></td><td>".$res['cep']."</td></tr>
							  <tr><td align='right'><b>TELEFONE:&nbsp;</b></td><td>".$res['telefone']."</td></tr>
							  <tr><td align='right'><b>E-MAIL:&nbsp;</b></td><td>".$res['email']."</td></tr>
							  <tr><td align='right'><b>SITE:&nbsp;</b></td><td>".$res['site']."</td></tr>
							  <tr><td align='right'><b>OBSERVAÇÕES:&nbsp;</b></td><td>".$res['obs']."</td></tr>
							  </table>";
                ?>
        </section>
      </div>
</div>
</body>
</html>