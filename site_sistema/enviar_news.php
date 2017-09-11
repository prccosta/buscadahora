<?php
require_once("conexao.php");
require_once("connbasic.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>::. Home - Busca da Hora - O seu site de buscas em S&atilde;o Paulo .::</title>
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<meta charset="ISO-8859-1">
<meta name="description" content="Busca da Hora - O seu site de buscas em SP">
<meta name="keywords" content="Comparação de preços, busca, Procura, Pesquisa, Preços, Computador, Informática. lojas de informática, Notebooks, Palmtop, GPS e Tablet, infodica, info dicas, Intel, MP5, MP12, MP11, automação comercial, automacao comercial, PC, Servidores, CPU e Memória, Cooler (ventoinha), Memórias, Placas-Mãe, Processadores, Armazenamento, CD e CDRW, Discos (HD), Drives Removíveis, DVD e DVDRW, Fitas, Mídias, Impressoras, Jato de Tinta, Laser, Matricial, Multifuncional, Outras, Suprimentos, Multimídia, Caixas de Som, Câmeras, maquina digital, MP3 e PenDrive, Outros, Placa de Som, Placas de Vídeo/Edição, Projetores e Telas, Video Games e afins, Redes, Cabeamento e Acessórios, Hub e Switch, Modem, Outros dispositivos, Placas de Rede, Rede sem fio (Wireless), VoIP, Periféricos, Monitores, Mouses, Drivers, Palmtops, Scanner, Teclado, Softwares, Aplicativos, Banco de Dados, Programação, Sistema Operacional, Sistemas, Software de Rede, Utilitários, Outros, Cabos e Adaptadores, Estabilizadores, Fontes, Gabinetes e Gavetas, Nobreaks, Outros Diversos, Segurança, Banda larga, Virtua, Speed, SP, São Paulo">
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
               <input type="text" name="nome" id="nome" value="" >
               <input type="email" name="email" id="email" value="Digite seu e-mail aqui" onFocus="this.value=''" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
               <div class="clear"><a href="#" class="fright" onClick="document.getElementById('newsletter-form').submit()">Enviar</a></div>
            </div>
            </fieldset>
         </form>
         <h2>Novi<span>dades</span></h2>
      <ul class="news">
            <li><strong>20 Out 2011</strong>
              <h4>Estr&eacute;ia do Site</h4>
               &Eacute; com imenso prazer que lan&ccedil;amos o site Busca da Hora, espero que gostem! </li>
            
        </ul>
      </aside>
      <!-- content -->
      <section id="content">
         <div class="inside">
           <h2>RESPOSTA <span>ENVIADA!</span></h2>
            <ul class="articles">
            	<li><img src="images/1page-img.jpg">
            	Faça o cadastro conosco e experimente por 30 dias sem custo algum. Saiba mais no menu <a href="funciona.php">Como Funciona</a> e aproveite essa promoção de inauguração que é por tempo limitado! Conheça nossos planos e o mais importante! Todos os planos são com cadastro de produtos ilimitados!</li>
            </ul>
            <br><br><br>
			              <?php
//iremos declarar as variaveis que recebemos pelo método post<br />
//em alguns servidores nem precisamos declarar, depende do register_global=on ou =off<br />
//aqui você digita o e-mail a ser recebido os dados do formulário de contato
$seuemail = "contato@buscadahora.com.br";
$email=$_POST[email];
$assunto = ":. Busca da Hora - NEWSLETTER .:";
$mensagem="NEWSLETTER";
//agora vamos enviar todos esses dados usando a função mail<br />

mail("$seuemail","$assunto","

Email: $email
Mensagem: $mensagem","FROM:$seuemail;$seuemail;");

echo "<p class='wrapper'><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obrigada por assinar nossa Newsletter!<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clique <a href='index.php'>aqui</a> para retornar ao site.</p>"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem
?>

            <br><br><br><br><br>
             
                       
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
