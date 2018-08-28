      <?php
        header('Content-Type: text/html; charset=utf-8');
      ?>

      <?php
      $servidor = "localhost";
      $usuario = "root";
      $senha = "";
      $dbname = "administranego";
      //Criar a conexao
      $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
      $conn->set_charset("utf8")
      ?>
  <!doctype html>
  <html lang="pt-br">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> <!-- html5 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Administra Neg&oacute;cios</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="css1/mobile.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.default.css">

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
    
<body data-spy="scroll" data-target=".navbar" data-offset="150">
  
  <?php

  include 'conexao.php';

  ?>
  <div class="container-fluid bg-dark">  
  <div class="container">
    <ul class="nav justify-content-end py-2">
    <li class="nav-item">
      <a class="nav-link text-white font-weight-normal display-5 border-right scroll" href="#contato">Central de Atendimento (24) 3323-1040 / 3328-6600</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white font-weight-normal display-5 border-right" href="http://api.whatsapp.com/send?1=pt_BR&phone=5524988731040"><img src="img/whatsapp-24.png" style="margin-top:-4px;">    Venda (24) 98873-1040</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white font-weight-normal display-5" href="#"><img src="img/facebook-24.png" style="margin-top:-4px;"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link font-weight-normal display-5" href="https://www.instagram.com/aministranegocios/"><img src="img/instagram-24.png" style="margin-top:-4px;"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link font-weight-normal text-white display-5" href="formLogon.php"><i class="fas fa-lock" style="margin-top:-4px;"></i></a>
    </li>
  </ul>
  </div>
  </div>

  <div class="container-fluid no-padding">
    <!-- Menu -->
    <nav class="navbar navbar-expand-sm navbar-light bg-faded" style="background:#fff;">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <img src="img/logo_administra_padrao.png" width="220">
            </a>
            <!-- Links -->
            <div class="collapse navbar-collapse justify-content-end" id="nav-content">   
                <ul class="navbar-nav" style="font-size: 22px; font-weight: 600;">
                    <li class="nav-item">
                    <a class="nav-link ml-4 text-color-1 scroll" href="#inicio">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 text-color-1 scroll" href="#empresa">Empresa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 text-color-1 scroll" href="#imoveis">Im&oacute;veis</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 text-color-1  scroll" href="#servicos">Servi&ccedil;os</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 text-color-1 scroll" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
            </div>
    </nav>
  </div>        

  <div class="container-fluid  bg-color-2"> 
    <div class="container">
      <div class="row">
        <h3 class="text-white font-weight-normal m-0 py-2">BUSCA DE IMÓVEIS</h3>
      </div>
    </div>
  </div>  

    
<section class="" id="imoveis" class="pb-5 bg-faded wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200"; style="background:#f2f2f2; padding-bottom: 20px;">
	<div class="container pt-4">
		<div class="row mb-1">
			<div class="col-md-12 text-center">
				<h3>RESULTADO DA BUSCA</h3>
				<hr class="divisor-vermelho">
			</div>
      </div>
	</div>

	<div class="container pt-4">
		<div class="row">

      <?php
			
      $verifica = 0;

			$nome_curso = $_POST['nome_curso'];
      $conteudo_curso = $_POST['conteudo_curso'];

			if(!empty($_POST['nome_curso']) && !empty($_POST['conteudo_curso'])){
			$result_cursos = "SELECT * FROM imoveis WHERE descricao LIKE '%$nome_curso%' or cidade LIKE '%$conteudo_curso%' LIMIT 500";
			$resultado_cursos = mysqli_query($conn, $result_cursos);
			$verifica = mysqli_num_rows($resultado_cursos);

			/*
			}elseif(!empty($_POST['nome_curso'])){    
			$result_cursos = "SELECT * FROM imoveis WHERE descricao LIKE '%$nome_curso%' LIMIT 500";
			$resultado_cursos = mysqli_query($conn, $result_cursos);    
			$verifica = mysqli_num_rows($resultado_cursos);
			*/

      }elseif(!empty($_POST['conteudo_curso'])){    
      $result_cursos = "SELECT * FROM imoveis WHERE cidade LIKE '%$conteudo_curso%' LIMIT 500";
      $resultado_cursos = mysqli_query($conn, $result_cursos);  
      $verifica = mysqli_num_rows($resultado_cursos); 
			}

			?>

			<?php

			while($rows_cursos = mysqli_fetch_array($resultado_cursos)){


			  ?>  

			<div class="col-sm-4 col-md-4 pl-1 pb-5">
				<a href="detalhes.php?id=<?php echo $rows_cursos['id'];?>" style="text-decoration: none;">
				<div class="hoverzoom" style="box-shadow: 0 0 5px rgba(0,0,0,0.2);">
					<img src="upload/<?php echo $rows_cursos['foto1'];?>" class="img-fluid">
					<div class="retina" style="padding: 0px;">
						<h4 class="mt-5 pt-5 text-color-1" style="font-weight:600; margin-top: 70px !important;">Mais Detalhes...</h4>
				  </div>
				  <div class="card text-white" style="max-width: 100%; border-radius: 0; border: 0;">
						<div class="card-header card-header-mn py-0" style="background: #fff; border-radius: 0; border-bottom: 0px solid #fff;">
							<h5 class="card-title mt-2 mb-1" style="color: #444; font-weight: 600;"><?php echo $rows_cursos['titulo'];?></h5>
							<p class="card-text mt-2 mb-3 text-color-5"><?php echo $rows_cursos['bairro'];?> - <?php echo $rows_cursos['cidade'];?></p>
							<p class="card-text border-top pt-3" style="font-size: 15px; color: #808080; height: 150px"><?php echo mb_strimwidth($rows_cursos['descricao'],0,200,'...');?></p>
						</div>
						<div class="d-flex px-2 bg-color-2">
							<div class="mr-auto p-1 pb-2 text-muted text-uppercase" style="color: #fff !important; font-size: 18px; font-weight: 600;">
							<?php echo $rows_cursos['tipo'];?>
							</div>
							<div class="p-1"class="text-muted" style="color: #fff !important; font-size: 20px; font-weight: 600;">R$ <?php echo number_format($rows_cursos['preco'],2,',','.');?></div>
						</div>
					</div>            
				</a>
				</div>
			</div>
			<?php } ?>
		</div>

    <a href="index.php">Voltar</a><br><br>

	</div>

</section>    <!-- Fim seção imóveis para locação  -->

          
<div class="container-fluid box-top fixed-bottom">
  <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
</div>


    <footer style="background: #2a2c32">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav justify-content-center mt-5">
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important; border-right: 1px solid #fff;" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important; border-right: 1px solid #fff;" href="#">Empresa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important; border-right: 1px solid #fff;" href="#">Im&oacute;veis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important; border-right: 1px solid #fff;" href="#">Servi&ccedil;os</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important;" disabled href="#">Contato</a>
              </li>
            </ul>        
          </div>
        </div>
      </div>    

      <div class="container mt-5">
        <div class="row">
          <div class="col-4">
            <p class="py-0 my-0" style="color: #D50000; font-size: 1.180em; font-weight: 600;">Matriz | Barra Mansa | RJ</p>
              <ul class="list-group mt-2">
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Rua Jos&eacute; Marcelino de Camargo, 1041</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Salas 302, 307, 308 e 309</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Centro</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">CEP: 27345-370</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Tel: (24) 3323-1040 / 3328-6600</li>
              </ul>            
          </div>  
          <div class="col-4">
            <p class="py-0 my-0" style="color: #D50000; font-size: 1.180em; font-weight: 600;">Filial | Porto Real | RJ</p>
              <ul class="list-group mt-2">
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Rua Ouro Preto, 140/102</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;"><br></li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">ViLlage</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">CEP: 27570-000</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Tel: (24) 3323-1040</li>
              </ul>            
          </div>  
          <div class="col-4">
            <p class="py-0 my-0" style="color: #D50000; font-size: 1.180em; font-weight: 600;">Filial | Angra dos Reis | RJ</p>
              <ul class="list-group mt-2">
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Rua da Concei&ccedil;&atilde;o, 170</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Em cima da Peg Shoes Sapataria</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Centro</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">CEP: 23900-435</li>
                <li class="list-group-item py-0 px-0" style="background-color: #2a2c32; color: #fff; border: none;">Tel: (24) 3323-1040</li>
              </ul>            
          </div>  
        </div>      
      </div> 

      <div class="row">
        <div class="container">
            <div class="col-md-12">
              <ul class="list-inline text-center my-4">
                <li class="list-inline-item px-4" style="color: #fff; font-size: 2.00em"><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                <li class="list-inline-item px-4" style="color: #fff; font-size: 2.00em"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                <li class="list-inline-item px-4" style="color: #fff; font-size: 2.00em"><i class="fa fa-youtube-square" aria-hidden="true"></i></li>  
              </ul>          
          </div>  
        </div>  
      </div>
    </footer>

    <div class="container-fluid" style="background: #3a3d45">
      <div class="container py-3 text-center" style="font-size: 1.00em; color: #999;">
        Administra Negocios Servi&ccedil;os de Escrit&oacute;rio Administrativo. | 2017 Todos os Direitos Reservados
      </div>
    </div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="src/js/jquery.js"></script>
        <script src="src/js/popper.js"></script>
        <script src="src/js/bootstrap.js"></script>
      
    <!--<script src="js/wow.min.js"></script>   -->
    <script>
      new WOW().init();
    </script>

    <script src="js/land.js"></script>

    <script>
      $(document).ready(function() {
        $('#myModal').modal('show');
      })    
    </script>

    <script src="owl-carousel/jquery.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>

    <script>      
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:true,
        stagePadding:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
      })
    </script> 



  </body>
</html>
