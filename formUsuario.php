<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <title>Administra Negócios</title>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

	<script src="jquery.mask.js"></script>

	<script>



	$(document).ready(function(){

	$('#preco').mask('000.000.000.000.000,00', {reverse: true});	

	});

	</script>
    </head>
    
<body>
	
	<?php
		
//	session_start();
	
//	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		
//		header('location:adm.php');
//	}
	
//	include 'conexao.php';
	
	?>
	
	
	<div class="container-fluid bg-dark py-4 text-center">
		<img src="img/logo_fundo_transp.png" class="rounded mx-auto d-block" alt="...">    
		<h2 class="text-white">AdministraNegócios</h2>
	</div>
	
<div class="container-fluid no-padding" style="background: #D50000;">
   <div class="container">
			<ul class="nav justify-content-center">
			  <li class="nav-item ml-5">
				  <a class="nav-link" style="color: #fff !important;" href="menu.php"><h5>Menu</h5></a>
			  </li>
			  <li class="nav-item ml-5">
				<a class="nav-link" style="color: #fff !important;" href="lista.php"><h5>Alterar Imóvel</h5></a>
			  </li>
			  <li class="nav-item ml-5">
				<a class="nav-link" style="color: #fff !important;" href="usuario.php"><h5>Cadastrar Usuário</h5></a>
			  </li>
			  <li class="nav-item ml-5">
				<a class="nav-link" style="color: #fff !important;" href="index.php"><h5>Sair</h5></a>
			  </li>
			</ul>
	</div>
</div>
	
	<div class="container pb-5">
		<div class="row justify-content-md-center">
			<div class="col-sm-8">
				<h1 class="display-5 py-5 text-center">Cadastro de novo Usuário</h1>
					<form method="post" action="inserirUsuario.php" enctype="multipart/form-data">
					
						<div class="form-group pt-3">
							<label for="preco">Nome</label>
							<input type="text" class="form-control" required name="nome" id="nome">
						</div>

						<div class="form-group pt-3">
							<label for="email">E-mail</label>
							<input type="email" class="form-control" required name="email" id="email">
						</div>

						<div class="form-group pt-3">
							<label for="email">Senha</label>
							<input type="password" class="form-control" required name="senha" id="senha">
						</div>

					
					<button type="submit" class="btn btn-outline-danger btn-lg mt-4">Cadastrar Usuário</button>
				
				</form>
				
			</div>
		</div>
	</div>

	<div class="footer">
    <div class="container-fluid" style="background: #3a3d45">
      <div class="container py-3 text-center" style="font-size: 1.00em; color: #999;">
        Administra Negocios Servi&ccedil;os de Escrit&oacute;rio Administrativo. | 2017 Todos os Direitos Reservados
      </div>
    </div>
 	</div>	
	
  <!-- jQuery first, then Tether, then Bootstrap JS. -->

</body>
</html>