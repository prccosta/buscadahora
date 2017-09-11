<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. Home - Busca da Hora - O seu site de buscas no Rio de Janeiro .::</title>
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas no RJ">
<meta name="keywords" content="Comparação de preços, busca, Procura, Pesquisa, Preços, Computador, Informática. lojas de informática, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automação comercial, automacao comercial, PC, Servidores, CPU e Memória, Cooler (ventoinha), Memórias, Placas-Mãe, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Removíveis, DVD e DVDRW, Fitas, Mídias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multimídia, Caixas de Som, Câmeras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de Vídeo/Edição, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acessórios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Periféricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programação, Sistema Operacional, Sistemas, Software de Rede, Utilitários, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Segurança, Banda larga, Virtua, Speed, RJ, Rio de Janeiro">
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
         <h1><a href="index.php">Busca da Hora</a></h1>
         <nav>
            <ul>
               <li class="current"><a href="index.php" class="m1">HOME</a></li>
              <li><a href="sobre.php" class="m2">SOBRE N&Oacute;S</a></li>
              <li><a href="funciona.php" class="m3">COMO FUNCIONA</a></li>
              <li><a href="produtos.php" class="m4">PRODUTOS</a></li>
              <li><a href="planos.php" class="m5">PLANOS</a></li>
              <li><a href="contato.php" class="m6">CONTATO</a></li>
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
         <h2>&Aacute;REA D<span>O</span> <span>CLIENTE</span></h2>
      <form action="user/valida.php" id="logar-form" method="post" target="_blank">
      <ul class="news">
            <li>
              <h4>Login <input name="login" type="text"></h4>
              <h4>Senha <input name="senha" type="password"></h4>
              <h4><a href="#" onClick="document.getElementById('logar-form').submit()">Logar</a></h4></li>
            
        </ul>
        </form>
      </aside>
      <!-- content -->
      <section id="content">
         <div class="inside">
           <h2>PROMO&Ccedil;&Atilde;O <span>DE LAN&Ccedil;AMENTO!!!</span></h2>
            <ul class="articles">
            	<li><img src="images/1page-img.jpg">
            	Faça o cadastro conosco e experimente por 30 dias sem custo algum. Saiba mais no menu <a href="funciona.php">Como Funciona</a> e aproveite essa promoção de inauguração que é por tempo limitado! Conheça nossos planos e o mais importante! Todos os planos são com cadastro de produtos ilimitados!</li>
            </ul>
            <br><br><br>
            <h2>PRODUTOS <span>EM DESTAQUE</span></h2>
            <ul class="list">
               <li><span><a href="#"><img src="images/icon1.png"></a></span>
                  <h4>Netbook ASUS C/ AMD Dual Core C60</h4>
                  <p> Netbook ASUS C/ AMD Dual Core C60, 2GB, HD 500GB, Webcam, Radeon HD6250, Wind7ST, 10.1" LED - Preto</p>
              </li>
            <li><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>SCJ - Sistema de Controle Jur&iacute;dico - Vers&atilde;o 1.0</h4>
                  <p>Sistema de Controle Jur&iacute;dico. Cadastro, Altera&ccedil;&atilde;o, Consulta e Exclus&atilde;o de Clientes. Relat&oacute;rios. Andamento Processual. Acesso de qualquer lugar. Plataforma WEB.</p>
              </li>
            <li class="last"><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>SCCF - Sistema de Controle de Cobrança e Finanças - Versão 1.0</h4>
                  <p>Sistema de Controle de Cobrança e Finanças. Cadastro, Altera&ccedil;&atilde;o, Consulta e Exclus&atilde;o de Clientes. Relat&oacute;rios. Baixa de boletos. Acesso de qualquer lugar. Plataforma WEB.</p><br><br><br><br><br>
              </li>
             <li><span><a href="#"><img src="images/icon1.png"></a></span>
                  <h4> LaserJet P1102w Pro</h4>
                  <p> Impressora Laser, Impress&atilde;o a preto (normal, A4) At&eacute; 18 ppm. Mem&oacute;ria de s&eacute;rie 8 MB, Velocidade do processador 266 MHz, Porta USB 2.0, WiFi 802.11 b/g.</p>
             </li>
            <li><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>SCT - Sistema de Controle de Transporte</h4>
                  <p>Sistema de Controle de Cobran&ccedil;a e Finan&ccedil;as. Cadastro, Altera&ccedil;&atilde;o, Consulta e Exclus&atilde;o de Clientes. Relat&oacute;rios. Acesso de qualquer lugar. Plataforma WEB.</p>
             </li>
            <li class="last"><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>Loja Virtual Completa</h4>
                  <p> Loja Virtual Completa vers&atilde;o 8.5. Na &aacute;rea administrativa voc&ecirc; pode cadastrar e controlar produtos ilimitados, controle total da sua loja, diversas formas de pagamentos.</p><br><br><br><br><br>
             </li>
           </ul>
                       
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
            <div class="aligncenter">Busca da Hora - <em>O seu site de buscas no RJ</em> - Todos os direitos reservados 2011<br>
               Feito por <a href="http://www.blushweb.com.br" class="new_window" target="_blank">Blush<em>!</em> Web e Publicidade</a></div>
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
