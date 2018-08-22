<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administra Negócios</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Start fancyBox-->
    <script type="text/javascript" src="fancyBox3/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="fancyBox3/jquery.fancybox.min.css">

    <script>
      $(document).ready(function(){
        $('[data-fancybox="images"]').fancybox({
          thumbs : {
            autoStart   : false, // Display thumbnails on opening
            hideOnClose : true   // Hide thumbnail grid when closing animation starts
          }
              });

        $('[data-fancybox="video"]').fancybox({
          type:"iframe",
            iframe:{
              css: {
                width: '100%' 
              }
            }
        });
      });
    </script>

    <style>
    .imgfancyBox {
      width: 19.4%;
    }
    </style>
    <!-- End fancyBox-->

    <script>
    $(document).ready(function() {
      $(".fancybox-button").fancybox({
        prevEffect    : 'none',
        nextEffect    : 'none',
        closeBtn    : false,
        helpers   : {
          title : { type : 'inside' },
          buttons : {}
        }
      });
    });
    </script>

  </head>
    
<body>
  
  <?php
  
    session_start();  
  
    include 'conexao.php';
  
  ?>
	
	
	<div class="container-fluid bg-dark py-4 text-center">
		<img src="img/logo_fundo_transp.png" class="rounded mx-auto d-block" alt="...">    
		<h2 class="text-white">AdministraNegócios</h2>
	</div>

<div class="container-fluid no-padding" style="background: #D50000;">
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="#">Área Adminsitrativa</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" style="color: #fff !important" href="#">Contato</a>
          </li>
          
          <?php
            
            if (empty($_SESSION['id'])) {
            
          ?>  
            
          <li class="nav-item">
            <a class="nav-link" style="color: #fff !important" href="formLogon.php">Logon</a>
          </li>
            
          <?php } else {
              
              if ($_SESSION['adm']==0) {
              
            $consulta_user=$conexao->query("SELECT usuario FROM usuarios WHERE id_user='$_SESSION[id]'");
            $exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);  
              
          ?>
            
          <li class="nav-item">
            <a class="nav-link mr-4" style="color: #fff !important" href="#"><i class="fas fa-user"> <?php echo $exibe_user['usuario']; ?> </i></a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" style="color: #fff !important" href="sair.php"><i class="fas fa-power-off"></i> Sair</a>
          </li>
            
          <?php } else { ?>
                
              <li class="nav-item">
                <a class="nav-link mr-4" style="color: #fff !important" href="#">ADM</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" style="color: #fff !important" href="sair.php"><i class="fas fa-power-off"></i> Sair</a>
              </li>
                
          <?php } 
            
          }?>
            
          </ul>
          
        </div>
      </nav>  
</div>  
</div>  

  <div class="container mt-5 pt-2">
		<div class="row justify-content-md-center">
			<div class="col-sm-8 text-center">
				<a href="inserir.php" class="btn btn-outline-dark btn-lg btn-block">Cadastrar Imóveis</a><br>
				<a href="lista.php" class="btn btn-outline-danger btn-lg btn-block">Alterar / Excluir Imóveis</a><br>
				<a href="lista.php" class="btn btn-outline-dark btn-lg btn-block">Gerenciar Imóveis</a><br>
				<a href="" class="btn btn-outline-danger btn-lg btn-block">Cadastro de Usuários</a><br>
				<a href="" class="btn btn-outline-dark btn-lg btn-block">Alterar / Excluir Usuários</a><br>
				<a href="" class="btn btn-outline-danger btn-lg btn-block">Sair da Área Administrativa</a><br>
			</div>
		</div>
	</div>

	<div class="footer pt-5 mt-5">
    <div class="container-fluid" style="background: #3a3d45">
      <div class="container py-3 text-center" style="font-size: 1.00em; color: #999;">
        Administra Negocios Servi&ccedil;os de Escrit&oacute;rio Administrativo. | 2017 Todos os Direitos Reservados
      </div>
    </div>
 	</div>	


  <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
     <script src="bootstrap/4.1.2/js/bootstrap.min.js"></script>
   <!-- <script src="js/wow.min.js"></script>   -->
  <script>
    new WOW().init();
  </script>

  <script src="js/land.js"></script>

    <script>
      $(document).ready(function() {
        $('#myModal').modal('show');
      })    
    </script>

</body>
</html>
<?php
