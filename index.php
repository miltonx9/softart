<?php
	session_start();
	$_SESSION['login'] = 2;
	$_SESSION['nivel'] = "1";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Federação Amapaense de Jiu-Jitsu Esportivo</title>
    <meta name='description' content='FEJJA'>
    <meta name='keywords' content='Mundo,  Arte, Suave, jiu-jitsu, amapá, fejja'>
    <meta name='rating' content='General'>
    <meta name='revisit-after' content='10 days'>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script type="text/javascript" src="js/iconwc.js"></script>
    <script src="js/mascaras.js"></script>
  </head>
  <body>
    <main class="container-fluid ">
      <?php include "includ/header.php" ?>
      <div class="row">
      <?php 
			if ($_SESSION['login']) {
      	include "includ/aside.php" 
      ?>
	      <section class="col-md-10">
	        <div class="collapse" id="navbarToggleExternalContent">
	          <div class="bg-white p-4">
	            <h4 class="text-secondary"></h4>
	            <!-- Aqui a imagem da logo mini -->
	            <img src="img/minilogo.jpg" class="img-fluid" alt="Responsive image">
	            <!-- Aqui Em texto para exibir tire o comentario -->
	            <!-- <span class="text-muted">FEDERAÇÃO DE JIU JITSU DO ESTADO DO AMAPÁ - FEJJA</span><br> -->
	            <!-- <span class="text-muted">CNPJ: 16.668.541/0001-22</span> -->
	          </div>
	        </div>
	        <nav class="navbar navbar-dark bg-dark text-danger row">
	          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span>FEJJA</span>
	          </button>
	          <p>
	            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Novo</button>
	          </p>
	          <div class="collapse" id="collapseExample">
	            <div class="card card-body">Estamos apenas começando, ainda tem muito mais, cadastros para usuários, atletas e professores, serão algumas das formas dinâmicas de interagir com a FEJJA. Fique atento e quando disponível não perca tempo.
	            <p>Obrigado.</p>
	            <!-- Aqui a imagem da logo mini dentro do Collapse -->
	            <!-- <img src="img/minilogo.jpg" class="img-fluid" alt="Responsive image">-->
	    	      </div>
	          </div>
	        </nav>
	        <?php include "includ/nav.php" ?>
	        <?php
	          if(!empty($_REQUEST['url']))
	          {
	            $url=$_REQUEST['url'];
	            require ($url);
	          }
	          else
	          {
	            require "includ/home.php";
	          }
	        ?>
	        <?php include "includ/footer.php" ?>
	      </section>
	    <?php
	    	}
	    	



	    	else
	    	{
	    		echo "<section class='col-md-12'>";
	    	?>
      		<?php
	          if(!empty($_REQUEST['pag']))
	          {
	            $url=$_REQUEST['pag'];
	            require ($url);
	          }
	          else
	          {
	            require "includ/home.php";
	          }
      		 echo "</section>";
      	}
      ?>
      </div>      
      <!-- Pra funcionar o boot Optional JavaScript -->
      <!-- Pra funcionar o boot jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="js/jquery-3.2.1.slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </main>
  </body>
</html>