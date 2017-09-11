<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. Produtos - Busca da Hora - O seu site de buscas no Rio de Janeiro .::</title>
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas no RJ">
<meta name="keywords" content="Comparação de preços, busca, Procura, Pesquisa, Preços, Computador, Informática. lojas de informática, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automação comercial, automacao comercial, PC, Servidores, CPU e Memória, Cooler (ventoinha), Memórias, Placas-Mãe, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Removíveis, DVD e DVDRW, Fitas, Mídias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multimídia, Caixas de Som, Câmeras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de Vídeo/Edição, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acessórios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Periféricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programação, Sistema Operacional, Sistemas, Software de Rede, Utilitários, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Segurança, Banda larga, Virtua, Velox, RJ, Rio de Janeiro">
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
         <h1><a href="index.html">Busca da Hora</a></h1>
         <nav>
            <ul>
              <li><a href="index.php" class="m1">HOME</a></li>
              <li><a href="sobre.php" class="m2">SOBRE N&Oacute;S</a></li>
              <li><a href="funciona.php" class="m3">COMO FUNCIONA</a></li>
              <li class="current"><a href="produtos.php" class="m4">PRODUTOS</a></li>
              <li><a href="planos.php" class="m5">PLANOS</a></li>
              <li><a href="contato.php" class="m4">CONTATO</a></li>
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
            <h2>PRODUTOS<span> EM DESTAQUE</span></h2><br><br>
           <ul class="list">
               <li><span><a href="#"><img src="images/icon1.png"></a></span>
                  <h4>Dell Inspiron 14R</h4>
                  <p> Notebook Proc Intel Core i3,  4GB DDR3, HD 500GB, DVDRW, tela WLED 14&quot; (1366x768), Wireless 802.11b/g/n, Bluetooth, leitor de cart&otilde;es 5 em 1, webcam com microfone, Windows 7 Home Basic Portugu&ecirc;s.</p>
             </li>
            <li><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>Dell Inspiron 14R</h4>
                  <p>Notebook Proc Intel Core i5,  4GB DDR3, HD 500GB, DVDRW, tela WLED 14&quot; (1366x768), Wireless 802.11b/g/n, Bluetooth, leitor de cart&otilde;es 5 em 1, webcam com microfone, Windows 7 Home Basic Portugu&ecirc;s.</p>
             </li>
            <li class="last"><span><a href="#"><img src="images/icon3.png"></a></span>
                  <h4>Dell Inspiron 15R</h4>
                  <p>Notebook Proc Intel Core i3,  4GB DDR3, HD 500GB, DVDRW, tela WLED 15.6&quot; (1366x768), Wireless 802.11b/g/n, Bluetooth, leitor de cart&otilde;es 5 em 1, webcam com microfone, Windows 7 Home Basic Portugu&ecirc;s.</p><br><br><br><br><br>
             </li>
             <li><span><a href="#"><img src="images/icon1.png"></a></span>
                  <h4> LaserJet P1102w Pro</h4>
                  <p> Impressora Laser, Impress&atilde;o a preto (normal, A4) At&eacute; 18 ppm. Mem&oacute;ria de s&eacute;rie 8 MB, Velocidade do processador 266 MHz, Porta USB 2.0, WiFi 802.11 b/g.</p>
             </li>
            <li><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>Pen Drive Kingston</h4>
                  <p> Pen Drive 16GB DataTraveler, modelo DT101G2/16GB Box,   101 Gen 2 (Preto).</p>
             </li>
            <li class="last"><span><a href="#"><img src="images/icon3.png"></a></span>
                  <h4>Blackberry Curve Prata</h4>
                  <p> Aparelho Celular Quad-Band: 850/900/1800/1900 MHz redes GSM/GPRS, Wi-Fi 802.11b/g ativado, Certifica&ccedil;&otilde;es de Alian&ccedil;a Wi-Fi: WPA/WPA2 Pessoal e Empresa.</p><br><br><br><br><br>
             </li>
                        <li><span><a href="#"><img src="images/icon1.png"></a></span>
                  <h4>Roteador D-Link</h4>
                  <p>Roteador modelo   DSL-500B (Gera&ccedil;&atilde;o II).   Modem Roteador ADSL2+ (Gera&ccedil;&atilde;oII) compat&iacute;vel com ADSL, ADSL2, ADSL2+ velocidades de at&eacute; 24Mbps servidor DHCP, DDNS, Roteamento, NAT e PAT.</p>
             </li>
            <li><span><a href="#"><img src="images/icon2.png"></a></span>
                  <h4>Encore  ENUWI-G2</h4>
                  <p> Adaptador wireless USB IEEE 802.11g 54Mbps, USB 1.0/1.1/2.0.</p>
             </li>
            <li class="last"><span><a href="#"><img src="images/icon3.png"></a></span>
                  <h4>PC  Pentium 4  </h4>
                  <p> Pentium 4 2.8 GHz ASUS/256/40/17.   ASUS, 256 Mb, CD, HD 40 Gb, Monitor 17, etc...</p><br><br><br><br><br>
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
            <div class="aligncenter">Busca da Hora - <em>O seu site de buscas no RJ</em> - Todos os direitos reservados 2011<br>
               Feito por <a href="http://www.blushweb.com.br" class="new_window" target="_blank">Blush<em>!</em> Web e Publicidade</a></div>
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
