<!doctype html>
<html lang="pt-br">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$dbname = "administranego";
			//Criar a conexao
			$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
			?> <a href="form_dois_campo">Voltar</a><br><br><?php
			$verifica = 0;

			$nome_curso = $_POST['nome_curso'];
			$conteudo_curso = $_POST['conteudo_curso'];
			
			if(!empty($_POST['nome_curso']) && !empty($_POST['conteudo_curso'])){
				$result_cursos = "SELECT * FROM imoveis WHERE nome LIKE '%$nome_curso%' or conteudo LIKE '%$conteudo_curso%' LIMIT 5";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
				$verifica = mysqli_num_rows($resultado_cursos);
			}elseif(!empty($_POST['nome_curso'])){		
				$result_cursos = "SELECT * FROM imoveis WHERE nome LIKE '%$nome_curso%' LIMIT 5";
				$resultado_cursos = mysqli_query($conn, $result_cursos);		
				$verifica = mysqli_num_rows($resultado_cursos);
			}elseif(!empty($_POST['conteudo_curso'])){		
				$result_cursos = "SELECT * FROM imoveis WHERE conteudo LIKE '%$conteudo_curso%' LIMIT 5";
				$resultado_cursos = mysqli_query($conn, $result_cursos);	
				$verifica = mysqli_num_rows($resultado_cursos);	
			}
			
			if($verifica > 0){
				while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
					echo "Nome do curso: ".$rows_cursos['nome']."<br>";
					echo "Conteúdo do curso: ".$rows_cursos['conteudo']."<hr>";
				}
			}else{
				echo "Nenhum curso encontrado na pesquisa";
			}
			
			
		?>

  
            <div class="col-sm-4 col-md-4 pl-1 pb-5">
              <a href="detalhes.php?id=<?php echo $exibe['id'];?>" style="text-decoration: none;">
                <div class="hoverzoom" style="box-shadow: 0 0 5px rgba(0,0,0,0.2);">
                  <img src="upload/<?php echo $exibe['foto1'];?>" class="img-fluid">
                  <div class="retina" style="padding: 0px;">
                    <h4 class="mt-5 pt-5 text-color-1" style="font-weight:600; margin-top: 70px !important;">Mais Detalhes...</h4>
                  </div>
                  <div class="card text-white" style="max-width: 100%; border-radius: 0; border: 0;">
                    <div class="card-header card-header-mn py-0" style="background: #fff; border-radius: 0; border-bottom: 0px solid #fff;">
                      <h5 class="card-title mt-2 mb-1" style="color: #444; font-weight: 600;"><?php echo $exibe['titulo'];?></h5>
                      <p class="card-text mt-2 mb-3 text-color-5"><?php echo $exibe['bairro'];?> - <?php echo $exibe['cidade'];?></p>
                <p class="card-text border-top pt-3" style="font-size: 15px; color: #808080; height: 150px"><?php echo mb_strimwidth($exibe['descricao'],0,200,'...');?></p>
              </div>
              <div class="d-flex px-2 bg-color-2">
                <div class="mr-auto p-1 pb-2 text-muted text-uppercase" style="color: #fff !important; font-size: 18px; font-weight: 600;">
                <?php echo $exibe['tipo'];?>
                </div>
                <div class="p-1"class="text-muted" style="color: #fff !important; font-size: 20px; font-weight: 600;">R$ <?php echo number_format($exibe['preco'],2,',','.');?>
                </div>
                    </div>
                  </div>            
                </a>
            </div>
          </div>


        </div>
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
