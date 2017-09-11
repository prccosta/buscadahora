<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. Contato - Busca da Hora - O seu site de buscas em S&atilde;o Paulo .::</title>
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas em SP">
<meta name="keywords" content="Comparação de preços, busca, Procura, Pesquisa, Preços, Computador, Informática. lojas de informática, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automação comercial, automacao comercial, PC, Servidores, CPU e Memória, Cooler (ventoinha), Memórias, Placas-Mãe, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Removíveis, DVD e DVDRW, Fitas, Mídias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multimídia, Caixas de Som, Câmeras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de Vídeo/Edição, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acessórios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Periféricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programação, Sistema Operacional, Sistemas, Software de Rede, Utilitários, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Segurança, Banda larga, Virtua, Velox, SP, São Paulo">
<meta name="author" content="Blush! Web e Publicidade - As melhores ideias estão aqui!">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/drop_down.js"></script>
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
<body id="page5">
<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <h1><a href="index.php">Busca da Hora</a></h1>
         <nav>
            <ul>
               <li><a href="index.php" class="m1">HOME</a></li>
               <li><a href="sobre.php" class="m2">SOBRE N&Oacute;S</a></li>
               <li><a href="funciona.php" class="m3">COMO FUNCIONA</a></li>
               <li><a href="produtos.php" class="m4">PRODUTOS</a></li>
               <li><a href="planos.php" class="m5">PLANOS</a></li>
               <li class="current"><a href="contato.php" class="m6">CONTATO</a></li>
               <li class="last"><a href="mapasite.php" class="m7">MAPA DO SITE</a></li>
            </ul>
         </nav>
         <form action="busca.php" id="search-form" method="post">
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
         <form action="enviar_news.php" id="newsletter-form" method="post">
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
            <h2>CADASTRO D<span>A HORA</span></h2>
            <div class="extra-wrap">
                  <h4>Informa&ccedil;&otilde;es:</h4>
                  <p>Ap&oacute;s preencher os dados abaixo voc&ecirc; ir&aacute; receber uma confirma&ccedil;&atilde;o de cadastro no nosso banco de dados. <strong><font color="#FF0000">Anote o n&uacute;mero do ID que aparecer&aacute; e envie para o e-mail contato@buscadahora.com.br.</font></strong> Ap&oacute;s isso &eacute; s&oacute; aguardar o nosso e-mail com o seu login e senha para que voc&ecirc; possa usufruir os nossos servi&ccedil;os e aumentar suas vendas! Para maiores informa&ccedil;&otilde;es ou d&uacute;vidas: contato@blushweb.com.br</p>
            </div>
            <h2>FORMUL&Aacute;RIO <span>DE CADASTRO</span></h2>
            <form id="contacts-form" action="enviar_cadastro.php" method="post">
               <fieldset>
               <div class="field">
                  <label>Nome da Empresa:</label>
                  <input name="empresa" type="text" id="empresa" value=""/>
               </div>
               <div class="field">
                  <label>Endere&ccedil;o:</label>
                  <input name="endereco" type="text" id="endereco" value=""/>
               </div>
               <div class="field">
                  <label>Bairro:</label>
                  <input name="bairro" type="text" id="bairro" value=""/>
               </div>
               <div class="field">
                 <label>Cidade:</label>
                  <input name="cidade" type="text" id="cidade" value=""/>
               </div>
               <div class="field">
                 <label>Estado:</label>
                  <input name="estado" type="text" id="estado" value=""/>
               </div>
               <div class="field">
                 <label>CEP:</label>
                  <input name="cep" type="text" id="cep" maxlength="9" value="" onkeyup="FormataCep(this,event)"/>
               </div>
               <div class="field">
                 <label>Telefone:</label>
                  <input name="telefone" type="text" id="telefone" value="" maxlength="13" onkeyup="fone(this,event)"/>
               </div>
               <div class="field">
                 <label>E-mail:</label>
                  <input name="email" type="email" id="email" value=""/>
               </div>
               <div class="field">
                  <label>Site:</label>
                  <input name="site" type="text" id="site" value=""/>
               </div>
               <div class="field extra">
                  <label>Informações:</label>
                  <textarea name="obs" cols="1" rows="1" id="obs" wrap="virtual"></textarea>
               </div>
               <div class="alignright"><input name="limpar" type="reset" value="Limpar"><input name="enviar" type="submit" value="Enviar"></div>
               </fieldset>
            </form>
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
