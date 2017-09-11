<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. Planos - Busca da Hora - O seu site de buscas no Rio de Janeiro .::</title>
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas no RJ">
<meta name="keywords" content="Compara��o de pre�os, busca, Procura, Pesquisa, Pre�os, Computador, Inform�tica. lojas de inform�tica, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automa��o comercial, automacao comercial, PC, Servidores, CPU e Mem�ria, Cooler (ventoinha), Mem�rias, Placas-M�e, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Remov�veis, DVD e DVDRW, Fitas, M�dias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multim�dia, Caixas de Som, C�meras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de V�deo/Edi��o, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acess�rios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Perif�ricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programa��o, Sistema Operacional, Sistemas, Software de Rede, Utilit�rios, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Seguran�a, Banda larga, Virtua, Velox, RJ, Rio de Janeiro">
<meta name="author" content="Blush! Web e Publicidade - As melhores ideias est�o aqui!">
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
               <li><a href="index.php" class="m1">HOME</a></li>
              <li><a href="sobre.php" class="m2">SOBRE N&Oacute;S</a></li>
              <li><a href="funciona.php" class="m3">COMO FUNCIONA</a></li>
              <li><a href="produtos.php" class="m4">PRODUTOS</a></li>
              <li class="current"><a href="planos.php" class="m5">PLANOS</a></li>
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
      </aside>
      <!-- content -->
      <section id="content">
         <div class="inside">
           <h2>Planos</h2><br>
            <h3>PROMO��O DE LAN�AMENTO</h3>
           <ul class="articles">
            	<li><img src="images/1page-img.jpg">
           	 Fa�a o cadastro conosco e experimente por 30 dias sem custo algum. Saiba mais nessa p&aacute;gina<a href="funciona.php"></a> e aproveite essa promo��o de inaugura��o que � por tempo limitado! Conhe�a nossos planos e o mais importante! Todos os planos s�o com cadastro de produtos ilimitados!</li>
            </ul>
            <br><br><br>
            <h4>B&Aacute;SICO:</h4>
                  <p>No plano B�sico voc� tem acesso � �rea administrativa cadastrando, consultando, editando e excluindo os seus produtos a hora que voc� quiser.<br>
                    O que voc&ecirc; tem direito nesse plano?<br>Cadastro ilimitado de produtos.
                  </p>
           <p>Valor mensal do plano: <strong>R$80,00</strong></p>
                  <p>Optando pelo pagamento semestral voc&ecirc; ter&aacute; desconto de 5%.<br>
                  Optando pelo pagamento anual voc&ecirc; ter&aacute; desconto de 10%.<br>
                  <h4>Importante: </h4> Contratando esse plano a dura��o m�nima � de 12 meses.</p><br><br>
            <h4>PREMIUM:</h4>
       	   <p>No plano Premium voc� tem acesso � �rea administrativa cadastrando, consultando, editando e excluindo os seus produtos a hora que voc� quiser.<br>
                    O que voc&ecirc; tem direito nesse plano?<br>Cadastro ilimitado de produtos.<br>
       	   Um produto em destaque na p&aacute;gina <a href="produtos.php">Produtos</a>.</p>
           <p>Valor mensal do plano: <strong>R$100,00</strong></p>
                  <p>Optando pelo pagamento semestral voc&ecirc; ter&aacute; desconto de 5%.<br>
                  Optando pelo pagamento anual voc&ecirc; ter&aacute; desconto de 10%.<br>
                  <h4>Importante: </h4> Contratando esse plano a dura��o m�nima � de 12 meses.</p><br><br>
           <h4>SENIOR:</h4> 
				  <p>No plano Senior voc� tem acesso � �rea administrativa cadastrando, consultando, editando e excluindo os seus produtos a hora que voc� quiser.<br>
                    O que voc&ecirc; tem direito nesse plano?<br>Cadastro ilimitado de produtos.<br>
       	   Um produto em destaque na p&aacute;gina <a href="index.php">Home</a> do site.</p>
           <p>Valor mensal do plano: <strong>R$120,00</strong></p>
                  <p>Optando pelo pagamento semestral voc&ecirc; ter&aacute; desconto de 5%.<br>
                  Optando pelo pagamento anual voc&ecirc; ter&aacute; desconto de 10%.<br>
                  <h4>Importante: </h4> Contratando esse plano a dura��o m�nima � de 12 meses.</p><br><br>
                  <h4>MASTER:</h4>
                  <p>No plano Senior voc� tem acesso � �rea administrativa cadastrando, consultando, editando e excluindo os seus produtos a hora que voc� quiser.<br>
                    O que voc&ecirc; tem direito nesse plano?<br>Cadastro ilimitado de produtos.<br>
       	   Um produto em destaque na p&aacute;gina <a href="produtos.php">Produtos</a> e na p&aacute;gina <a href="index.php">Home</a> do site.</p>
           <p>Valor mensal do plano: <strong>R$150,00</strong></p>
                  <p>Optando pelo pagamento semestral voc&ecirc; ter&aacute; desconto de 5%.<br>
                  Optando pelo pagamento anual voc&ecirc; ter&aacute; desconto de 10%.<br>
                  <h4>Importante: </h4> Contratando esse plano a dura��o m�nima � de 12 meses.</p><br><br>
                  <h4>PRODUTOS EM DESTAQUE AVULSO</h4>
                  <p>Voc� pode anunciar quantos produtos quiser, optando pelo plano Produtos em Destaque Avulso.</p>
                  <p>Valor de cada produto anunciado: <strong>R$15,00</strong></p>
                  <p>Importante: O plano Produtos em Destaque Avulso n�o tem car�ncia e nem prazo. Voc� pode anunciar quando quiser sem se preocupar em pagar todo m�s a quantia.</p>
                  <br><br>
                  <h4>FORMAS DE PAGAMENTO</h4>
                  <p>Temos tr�s formas de pagamento. Escolha a melhor para sua comodidade:</p>
                  
                  <p><strong>DEP�SITO BANC�RIO <br>
                     PAGSEGURO <br>
                     BOLETO BANC�RIO</strong>
                  </p>
                  <p>Lembrando que optando por <strong>PAGSEGURO</strong>, voc� pode pagar com cart�o de cr�dito ou boleto e parcelar em at� 18x a mensalidade com juros do <strong>PAGSEGURO</strong>.</p>
                       
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
