<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <title>FEDERAÇÃO DE JIU JITSU DO ESTADO DO AMAPÁ - FEJJA</title>
<META NAME="DESCRIPTION" CONTENT="FEJJA">
<META NAME="KEYWORDS" CONTENT="Mundo,  Arte, Suave, jiu-jitsu, amapá, fejja">
<META NAME="OWNER" CONTENT="mundo@mundo.com.br">
<META HTTP-EQUIV="VW96.OBJECT TYPE" CONTENT="Homepage">
<META NAME="RATING" CONTENT="General">
<META NAME="ROBOTS" CONTENT="index,follow">
<META NAME="REVISIT-AFTER" CONTENT="10 days">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">

<?php include "function/mascaras.js" ?>

  </head>
  
  
  
<body>
<main class="container-fluid">
	<?php include "includ/header.php" ?>
    <?php include "includ/nav.php" ?>

								<?php
                                    if(isset($_GET['m']))
                                        if(@$m == false)
                                {
                                     $m = 'home';
                                }
                                        switch (@$_GET['m'])
                                {
                                    
                                    case "home":
                                       include "includ/home.php";
                                        break;
                                    
                                    case "usuario":
                                       include "includ/usuario.php";
                                        break;
                                    
									case "entrarusuario":
                                       include "includ/entrarusuario.php";
                                        break;
									
									case "professor":
                                       include "includ/professor.php";
                                        break;
									
									case "entrarprofessor":
                                       include "includ/entrarprofessor.php";
                                        break;
                                        
										default:
                                        include "includ/home.php";
                                }
                                ?>
                                
	<?php include "includ/footer.php" ?>


    <!-- Pra funcionar o boot Optional JavaScript -->
    <!-- Pra funcionar o boot jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    
</main>
</body>
</html>