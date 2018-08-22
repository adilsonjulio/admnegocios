<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags always come first -->
		<meta charset="ISO-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<title>Administra Neg&oacute;cios</title>

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
      width: 32.0%;
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

    $id_imovel=$_GET['id'];

    $consulta = $conexao->query("SELECT * FROM imoveis WHERE id='$id_imovel'");

    $exibir = $consulta->fetch(PDO::FETCH_ASSOC);

    ?>

    <div class="container-fluid no-padding">
 	   <div class="container-fluid no-padding img-header" style="background: #000; height: 32px;" id="inicio">
              <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                        <ul class="list-inline pull-right">
                          <li class="list-inline-item"><i class="fa fa-phone text-center" aria-hidden="true" style="background: #FF1B1F; font-size: 12px; color: #fff; width: 20px; height: 20px; line-height: 24px; border-radius: 50%; margin-left: 0 !important; margin-right: 0 !important;"></i></li>
                          <li class="list-inline-item pr-4" style="font-size: 16px; line-height: 30px; font-weight: 600; color: #fff; font-family: Roboto,Arial,sans-serif !important; font-weight: 500; letter-spacing: 1px">24 3323-1040 / 33238-6600</li>
                          <li class="list-inline-item">
                          <a href="#contato" class="scroll"><i class="fa fa-envelope text-center" aria-hidden="true" style="background: #FF1B1F; font-size: 10px; width: 20px; height: 20px; line-height: 22px; color: #fff; border-radius: 50%; margin-left: 0 !important; margin-right: 0 !important;"></i></a>
                          </li>
                          <li class="list-inline-item pr-4" style="font-size: 17px; line-height: 30px; font-weight: 500; color: #fff; font-family: Roboto,Arial,sans-serif !important; font-weight: 400; letter-spacing: 1px">contato@administranegocios.com.br
                          </li>
                          <li class="list-inline-item">
                          <a href="#"><i class="fa fa-facebook text-center" aria-hidden="true" style="background: #FF1B1F; font-size: 14px; width: 20px; height: 20px; line-height: 20px; color: #fff;  border-radius: 50%; margin-left: 0 !important; margin-right: 0 !important;"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

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
                <ul class="navbar-nav" style="font-size: 21px; font-weight: 600;">
                    <li class="nav-item">
                    <a class="nav-link ml-4 scroll" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 scroll" href="#empresa">Empresa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 scroll" href="#imoveis">Im&oacute;veis</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 scroll" href="#servicos">Servi&ccedil;os</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4 scroll" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
            </div>
		</nav>
	</div>

	<div class="container-fluid" style="background: #2a2c32">
    	<div class="container">
        	<h2 class="text-center font-weight-bold py-5" style="color:#fff;"><?php echo $exibir['titulo']; ?></h2>
        </div>
    </div>


	<div class="container gallery-container mt-5">
            <div class="row">
                <div class="col-md-5 py-3 mt-3 ml-2">
                    <p class="ref">Ref.: 00<?php echo $exibir['id']; ?></p>
                    <h3 style="font-size:20px;"><?php echo $exibir['descricao']; ?></h3>
                </div>

                <div class="col-md-5 py-3 mt-3 ml-5" style="border-left: 2px solid #ddd;">
                    <div class="text-center">
                        <p class="mb-0 pt-4 font-weight-bold" style="font-size:30px; color: #D50000">R$ <?php echo number_format($exibir['preco'],2,',','.'); ?></p>
                    </div>
                </div>
            </div>

	<div class="container my-5">
        <div class="row">
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto1']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto1']; ?>" data-caption="Image 2" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto2']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto2']; ?>" data-caption="Image 2" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto3']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto3']; ?>" data-caption="Image 3" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto4']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto4']; ?>" data-caption="Image 4" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto5']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto5']; ?>>" data-caption="Image 5" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto6']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto6']; ?>>" data-caption="Image 6" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto7']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto7']; ?>" data-caption="Image 7" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto8']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto8']; ?>" data-caption="Image 8" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 pl-1 p-2">
				<div class="hoverzoom" style="border-radius: 8px;">
						<img src="upload/<?php echo $exibir['foto9']; ?>" class="img-fluid imgfancyBox">
						<a href="upload/<?php echo $exibir['foto9']; ?>" data-caption="Image 9" data-fancybox="images">
					<div class="retina" style="padding: 0px; background: transparent;">
						<p class="text-center" style="color: #fff; font-weight:600;"></>
					</div>
					</a>
				</div>
			</div>
        </div>
    </div>

</div>
		<div id="servicos"></div>

        <section class="pt-4" style="background: #2a2c32;">
            <div class="container pt-3">
                <div class="row mb-1">
                    <div class="col-md-12 text-center">
                        <h2 style="color: #D50000;">CONHE&Ccedil;A NOSSOS DIFERENCIAIS</h2>
                        <hr class="divisor-vermelho">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-3 text-center">
                            <img src="img/creci1.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Imobili&aacute;ria</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Administra&ccedil;&atilde;o, Venda e regulariza&ccedil;&atilde;o de im&oacute;veis, Contrato e escrituras de compra e venda, Desmembramento e remembramento de im&oacute;veis, Regulariza&ccedil;&atilde;o e administra&ccedil;&atilde;o de loteamentos, Engenharia e Arquitetura.</p>
                    </div>
                    <div class="col-3 text-center">
                            <img src="img/contabil1.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Contabilidade</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Servi&ccedil;os cont&aacute;beis de Empresas, Pessoas F&iacute;sicas, Imposto de Renda, Registro e baixa de empresas, Microempreendedor, C&aacute;lculos de aposentadoria, Escritura&ccedil;&atilde;o de livros fiscais e cont&aacute;beis, Transmiss&atilde;o de declara&ccedil;&otilde;es eletr&ocirc;nicas e obriga&ccedil;&otilde;es assess&oacute;rias. </p>
                    </div>
                    <div class="col-3 text-center">
                            <img src="img/logo_consultoria.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Avalia&ccedil;&atilde;o de Im&oacute;veis</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Avalia&ccedil;&atilde;o de Bens e Im&oacute;veis, Casas, Apartamentos, S&iacute;tios, Fazendas, Terrenos, Lojas, Loteamentos, Empresas e M&aacute;quinas.</p>
                    </div>
                    <div class="col-3 text-center">
                            <img src="img/logo_edificacoes.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Edifica&ccedil;&otilde;es</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Projetos, Reformas, Constru&ccedil;&otilde;es, Assessoria T&eacute;cnica e  Meio Ambiente.</p>
                    </div>
			</div>
		</section>


    <section>
        <div class="container mt-4" id="contato">
            <div class="row mb-1">
                <div class="col-md-12 text-center">
                    <h2 class="text-color1">FALE CONOSCO</h2>
                    <hr class="divisor-vermelho">
                </div>
            </div>

            <form>
            <blockquote class="blockquote text-center mt-2" style="color: #000;">
              <p class="pb-4">Preencha o formul&aacute;rio abaixo, um de nossos consultores ir&aacute; entrar em contato.</p>
            </blockquote>
            <div class="form-row mt-4">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nome</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Nome Completo">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Digite seu email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Cidade</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Digite sua Cidade">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Telefone</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Telefone para contato">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group text-center">
                  <button type="submit" class="btn px-4" style="font-size: 20px; color: #fff; border-radius: 4px; background: #D50000;">ENVIAR MENSAGEM</button>
              </div>
            </form>
        </div>
    </section>

		<!--Rodapé-->
<!--
		<nav class="navbar navbar-dark navbar-full bg-inverse">
			<div class="container text-xs-center text-sm-left">
				<img src="img/logo-im-mx.png" height="40">
				<span class="navbar-text float-sm-right" style="color: #979797">Feito com <i class="fa fa-heart text-danger wow pulse" data-wow-iteration="infinite"></i> por <b>Derlan Lima</b> ©2016</span>
			</div>
		</nav>

		<!-- Modal Vídeo -->
		<div class="modal fade" id="videoModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">x</button>
						<h4 class="modal-title">Introdu&ccedil;&atilde;o</h4>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="https://player.vimeo.com/video/194555118" class="embed-responsive-item video-modal" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

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
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important;" href="#">Contato</a>
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
