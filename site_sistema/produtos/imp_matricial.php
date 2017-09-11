<?php
require_once("../conexao.php");
require_once("../connbasic.php");

$consulta=mysql_query("SELECT * FROM produtos WHERE subcategoria = 'Matricial'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. MATRICIAL - Busca da Hora - O seu site de buscas em S&atilde;o Paulo .::</title>
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas em SP">
<meta name="keywords" content="Comparação de preços, busca, Procura, Pesquisa, Preços, Computador, Informática. lojas de informática, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automação comercial, automacao comercial, PC, Servidores, CPU e Memória, Cooler (ventoinha), Memórias, Placas-Mãe, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Removíveis, DVD e DVDRW, Fitas, Mídias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multimídia, Caixas de Som, Câmeras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de Vídeo/Edição, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acessórios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Periféricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programação, Sistema Operacional, Sistemas, Software de Rede, Utilitários, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Segurança, Banda larga, Virtua, Velox, SP, São Paulo">
<meta name="author" content="Blush! Web e Publicidade - As melhores ideias estão aqui!">
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<script type="text/javascript" src="../../js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="../../js/cufon-yui.js"></script>
<script type="text/javascript" src="../../js/cufon-replace.js"></script>
<script type="text/javascript" src="../../js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="../../js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript" src="../../js/drop_down.js"></script>
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
   <header>
      <div class="container">
        <h1><a href="../index.php">Busca da Hora</a></h1>
         <nav>
            <ul>
               <li><a href="../index.php" class="m1">HOME</a></li>
              <li><a href="../sobre.php" class="m2">SOBRE N&Oacute;S</a></li>
              <li><a href="../funciona.php" class="m3">COMO FUNCIONA</a></li>
              <li><a href="../produtos.php" class="m4">PRODUTOS</a></li>
              <li><a href="../planos.php" class="m5">PLANOS</a></li>
              <li><a href="../contato.php" class="m6">CONTATO</a></li>
              <li class="last"><a href="../mapasite.php" class="m7">MAPA DO SITE</a></li>
           </ul>
         </nav>
         <form action="../busca.php" id="search-form" method="post">
            <fieldset>
            <div class="rowElem">
               <input type="text" id="consulta" name="consulta">
               <a href="#" onClick="document.getElementById('search-form').submit()">Busca</a></div>
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
         <h3>Categorias</h3>
			<?php include_once('menu_lateral.php');?>
        <br><br>
         <form action="../enviar_news.php" id="newsletter-form" method="post">
            <fieldset>
            <div class="rowElem">
               <h2>Newsletter</h2>
               <input type="email" name="email" id="email" value="Digite seu e-mail aqui" onFocus="this.value=''" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
               <div class="clear"><a href="#" class="fright" onClick="document.getElementById('newsletter-form').submit()">Enviar</a></div>
            </div>
            </fieldset>
         </form>
      </aside>
      <!-- content -->
      <section id="content">
         <div class="inside">
           <h2>MATR<span>ICIAL</span></h2>
    <br>
            <h3>PROMOÇÃO DE LANÇAMENTO</h3>
           <ul class="articles">
            	<li><img src="../images/1page-img.jpg">
           	 Faça o cadastro conosco e experimente por 30 dias sem custo algum. Saiba mais nessa p&aacute;gina<a href="../funciona.php"></a> e aproveite essa promoção de inauguração que é por tempo limitado! Conheça nossos planos e o mais importante! Todos os planos são com cadastro de produtos ilimitados!</li>
            </ul>
            <br><br><br>
            <h4>LISTAGEM DE PRODUTOS</h4><br><br>
            <!-- CABEÇALHO DA PLANILHA - NÃO MEXER! -->
            <?php
            echo "<table border='1' align='center' bgcolor='#3399CC' width='600'>
            <tr align='center'>
            <td width='134'>FABRICANTE</td>
            <td width='108'>MODELO</td>
            <td width='192'>ESPECIFICAÇÃO</td>
            <td width='75'>VALOR</td>
            <td width='200'>VENDEDOR</td>
            <td width='91'>LOCAL</td>
            </tr>
            <tr>
              <td colspan='6'>==============================================================================================</td></tr></table>
";
			while($res=mysql_fetch_array($consulta)){
			$empresa=$res['empresa'];
			echo "<table border='1' align='center' width='650'><tr align='center' height='15'>
			<td width='134' valign='middle'>".$res['fabricante']."</td>
			<td width='108' valign='middle'>".$res['modelo']."</td>
			<td width='192' valign='middle'>".$res['especificacao']."</td>
			<td width='75' valign='middle'>".$res['preco']."</td>
			<td width='200' valign='middle'><a href='empresa.php?empresa=$empresa' target='_blank'>".$res['empresa']."</a></td>
			<td width='91' valign='middle'>".$res['local']."</td></tr><tr><td colspan='6'>______________________________________________________________________________________________</td></tr><br>";
			}
			?> 
            
            <!-- NÃO DELETAR A TABELA ABAIXO!!! -->
            <table border="1" align="center" bgcolor="#3399CC" width="600">
            <tr align="center"><td></td></tr></table>
            <br><br>
			<p>Os produtos listados acima podem sofrer alterações de valores. Para maiores informações entre em contato com a loja antes de ir ao local.</p>	
		        
        </div>
      </section>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft">&nbsp;</div>
            <div class="aligncenter">Busca da Hora - <em>O seu site de buscas em SP</em> - Todos os direitos reservados 2011<br>
               Feito por <a href="http://www.blushweb.com.br" class="new_window" target="_blank">Blush<em>!</em> Web e Publicidade</a></div>
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>