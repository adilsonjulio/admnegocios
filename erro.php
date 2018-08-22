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

	</head>
    
<body>
	<div class="container-fluid bg-dark py-4 text-center">
		<img src="img/logo_fundo_transp.png" class="rounded mx-auto d-block" alt="...">    
		<h2 class="text-white">AdministraNegócios</h2>
	</div>

<div class="container-fluid no-padding" style="background: #D50000;">
   <div class="container">
			<ul class="nav justify-content-center" style="font-size: 26px;">
			  <li class="nav-item ml-5">
				<a class="nav-link" style="color: #fff !important;">Acesso a Área Administrativa</a>
			  </li>
			</ul>
	</div>
</div>
	
<div class="container my-5 pt-5">
	<div class="row justify-content-md-center pt-4">
		<div class="col-sm-8 col-sm-offset-4 text-center">
			<form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" class="form-signin" id="formLogin">
				
				<h4>Usuário ou senha inválidos!</h4>
		</div>
	</div>
		
	<div class="row justify-content-md-center pt-5 mt-5">
		<div class="col-sm-2 col-sm-offset-4 text-center">
				<a href="formLogon.php" style="cursor: pointer" class="btn btn-outline-danger btn-block">
            <span class="glyphicon glyphicon-ok">Tentar Novamente</span>
			</a>	
		</div>
	</div>
     
	<div class="row justify-content-md-center mt-5">
		<div class="col-sm-6 col-sm-offset-4 text-center">
        <a href="formUsuario.php">
        <button type="submit" class="btn btn-lg btn-link" style="cursor: pointer;">
           Ainda não sou cadastrado
        </button>
        </a>  
     </div>  
   </div>  
     
</div>	
<br>
<br>
<br>
<!--   <div class="container">
      <div class="row">
         <div class="col-md-4 mx-auto"> 
            <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" class="form-signin" id="formLogin">
              <h2 class="form-signin-heading">Área Administrativa</h2>
              <label for="input" class="sr-only">Email address</label>
              <input name="usuario" type="input" autofocus required class="form-control" id="usuario" placeholder="Nome de Usuário">
              <label for="inputPassword" class="sr-only">Password</label>
              <input name="senha" type="input" required class="form-control mt-2" id="senha" placeholder="Senha">
              <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Entrar</button>
            </form>
         </div>
      </div>
   </div>-->
  
	<div class="footer pt-5 mt-5">
    <div class="container-fluid" style="background: #3a3d45">
      <div class="container py-3 text-center" style="font-size: 1.00em; color: #999;">
        Administra Negocios Servi&ccedil;os de Escrit&oacute;rio Administrativo. | 2017 Todos os Direitos Reservados
      </div>
    </div>
 	</div>	

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
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