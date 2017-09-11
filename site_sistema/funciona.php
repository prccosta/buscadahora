<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. Como Funciona - Busca da Hora - O seu site de buscas no Rio de Janeiro .::</title>
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
              <li class="current"><a href="funciona.php" class="m3">COMO FUNCIONA</a></li>
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
      </aside>
      <!-- content -->
      <section id="content">
         <div class="inside">
           <h2>COMO <span>FUNCIONA</span></h2><br>
            <h3>PROMO��O DE LAN�AMENTO</h3>
           <ul class="articles">
            	<li><img src="images/1page-img.jpg">
           	 Fa�a o cadastro conosco e experimente por 30 dias sem custo algum. Saiba mais nessa p&aacute;gina<a href="funciona.php"></a> e aproveite essa promo��o de inaugura��o que � por tempo limitado! Conhe�a nossos planos e o mais importante! Todos os planos s�o com cadastro de produtos ilimitados!</li>
            </ul>
            <br><br><br>
            <h4>PRIMEIRO PASSO:</h4>
                  <p>Leia atentamente a nossa p&aacute;gina com os nossos <a href="planos.php">planos</a> e entre em contato conosco pelo formul&aacute;rio de contato ou diretamente pelo e-mail: contato@buscadahora.com.br informando os seguintes dados:</p>
                  <p>Nome Completo<br>
                  	 Endere�o Completo ou Nome da Empresa<br>
                     CEP<br>
                     CPF ou CNPJ<br>
                     Telefone<br>
                     Celular<br>
                     E-mail<br>
                     Site<br>
                     Plano de Pagamento (Mensal, Trimestral, Semestral e Anual)<br>
                     Forma de pagamento (PagSeguro ou Boleto Banc�rio)<br>
                     Plano Contratado (Plano B&aacute;sico, Premium, Senior e Master e produtos em destaque avulso)<br>
                  </p>
            <h4>SEGUNDO PASSO:</h4>
       	   <p>Ap�s o envio voc� ser� cadastrado no nosso sistema e no prazo m�ximo de 5 dias estar� recebendo um e-mail com as explica��es e com seu login e senha para acesso ao sistema de cadastro de produtos junto com o contrato e suas cl&aacute;usulas.<br>
                  Nosso diferencial � que o cadastro de produtos � ilimitado. Isso mesmo! Ap�s os 30 dias de avalia��o voc� escolhe seu plano e poder� cadastrar quantos produtos quiser!
           </p>
           <h4>TERCEIRO PASSO:</h4> 
				  <p>Existem 4 tipos de plano da pagamento: Mensal, Trimestral, Semestral e Anual.<br>
				    Existem 2 formas de pagamento: Boleto banc&aacute;rio e PagSeguro(Boleto, transfer&ecirc;ncia banc&aacute;ria e Cart&otilde;es de cr&eacute;dito - Lembrando que o pagamento pelo PagSeguro tem juros cobrados por eles)<br>
				    Existem 4 de planos contratados: Plano B&aacute;sico, Premium, Senior e Master
				  e produtos em destaque avulso.</p>
				  <p>Se voc&ecirc; optar pelo pagamento em Boleto Banc&aacute;rio, voc&ecirc; ir&aacute; receber 
				    por e-mail o boleto. Se optar por pagar pelo PagSeguro voc&ecirc; ir&aacute; receber um e-mail com as instru&ccedil;&otilde;es para pagamento.</p><br>
                  <h4>INFORMA��ES ADICIONAIS</h4>
                  <p>Nosso vencimento � todo dia 10.<br>
                  <h4>FORMAS DE PAGAMENTO</h4>
                  <p>Temos tr�s formas de pagamento. Escolha a melhor para sua comodidade:</p>
                  
                  <p><strong>DEP�SITO BANC�RIO <br>
                     PAGSEGURO <br>
                     BOLETO BANC�RIO</strong>
                  </p>
                  <p>Lembrando que optando por <strong>PAGSEGURO</strong>, voc� pode pagar com cart�o de cr�dito ou boleto e parcelar em at� 18x a mensalidade com juros do <strong>PAGSEGURO</strong>.</p>
                  <h4>Importante: </h4> Contratando os planos B�sico, Premium, Senior e Master a dura��o m�nima � de 12 meses.</p><br><br></p>
                       
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
