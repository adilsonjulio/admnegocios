<?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
<?php require_once('Connections/administranego.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_administranego, $administranego);
$query_lancamento = "SELECT * FROM imoveis WHERE lancamento = 1 ORDER BY id DESC";
$lancamento = mysql_query($query_lancamento, $administranego) or die(mysql_error());
$row_lancamento = mysql_fetch_assoc($lancamento);
$totalRows_lancamento = mysql_num_rows($lancamento);

$colname_detalhes = "-1";
if (isset($_GET['id'])) {
  $colname_detalhes = $_GET['id'];
}
mysql_select_db($database_administranego, $administranego);
$query_detalhes = sprintf("SELECT * FROM imoveis WHERE id = %s", GetSQLValueString($colname_detalhes, "int"));
$detalhes = mysql_query($query_detalhes, $administranego) or die(mysql_error());
$row_detalhes = mysql_fetch_assoc($detalhes);
$totalRows_detalhes = mysql_num_rows($detalhes);
?>
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

	<link rel="stylesheet" href="baguetteBox.js-dev/dist/baguetteBox.min.css">
	<link rel="stylesheet" href="freebie-4-bootstrap-gallery-templates/grid/gallery-grid.css">
 
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
<div class="container-fluid no-padding img-header" style="background: #000; height: 32px;">		
          <div class="container">
          	<div class="row">
          		<div class="col-md-3">
			    </div>
				<div class="col-md-9">
					<ul class="list-inline pull-right">
					  <li class="list-inline-item"><i class="fa fa-phone text-center" aria-hidden="true" style="background: #FF1B1F; font-size: 12px; color: #fff; width: 20px; height: 20px; line-height: 20px; border-radius: 50%; margin-left: 0 !important; margin-right: 0 !important;"></i></li>
					  <li class="list-inline-item pr-4" style="font-size: 15px; line-height: 30px; font-weight: 500; color: #fff; font-family: Roboto,Arial,sans-serif !important; font-weight: 500; letter-spacing: 1px">24 3323-0000</li>
					  <li class="list-inline-item">
					  <a href="#contato" class="scroll"><i class="fa fa-envelope text-center" aria-hidden="true" style="background: #FF1B1F; font-size: 10px; width: 20px; height: 20px; line-height: 20px; color: #fff; border-radius: 50%; margin-left: 0 !important; margin-right: 0 !important;"></i></a>
					  </li>
					  <li class="list-inline-item pr-4" style="font-size: 16px; line-height: 30px; font-weight: 500; color: #fff; font-family: Roboto,Arial,sans-serif !important; font-weight: 400; letter-spacing: 1px">contato@administranegocios.com.br
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
		<nav class="navbar navbar-expand-sm navbar-light" style="background:#fff;">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="img/logo_administra.png" width="240">
            </a>
            <!-- Links -->
            <div class="collapse navbar-collapse justify-content-end" id="nav-content">   
                <ul class="navbar-nav" style="font-size: 21px; font-weight: 600;">
                    <li class="nav-item">
                    <a class="nav-link ml-4" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4" href="#">Empresa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4" href="#">Im&oacute;veis</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4" href="#">Servi&ccedil;os</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ml-4" href="#">Contato</a>
                    </li>
                </ul>
            </div>
            </div>
		</nav>

	<div class="container-fluid" style="background: #2a2c32">
    	<div class="container">
        	<h2 class="text-center font-weight-bold py-5" style="color:#fff;"><?php echo $row_detalhes['titulo']; ?></h2>
        </div>
    </div>
    

	<div class="container gallery-container mt-5">
            <div class="row">
                <div class="col-md-5 py-3 mt-3 ml-2">
                    <p class="ref">Ref.: 00<?php echo $row_detalhes['id']; ?></p>
                    <h3 style="font-size:20px;"><?php echo $row_detalhes['descricao']; ?></h3>
                </div>

                <div class="col-md-5 py-3 mt-3 ml-5" style="border-left: 2px solid #ddd;">
                    <div class="text-center">
                        <p class="mb-0 pt-4 font-weight-bold" style="font-size:30px; color: #D50000">R$ <?php echo number_format($row_detalhes['preco'],2,',','.'); ?></p>
                    </div>
                </div>
            </div>

    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto1']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto1']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto2']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto2']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto3']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto3']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto4']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto4']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto5']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto5']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto6']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto6']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto7']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto7']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto8']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto8']; ?>" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="upload/<?php echo $row_detalhes['foto9']; ?>">
                    <img src="upload/<?php echo $row_detalhes['foto9']; ?>" alt="Park">
                </a>
            </div>
        </div>

    </div>

</div>

        <section id="vantagens" class="py-3 mt-5" style="background: #2a2c32;">
            <div class="container pt-3">
                <div class="row mb-1">
                    <div class="col-md-12 text-center">
                        <h2 style="color: #D50000;">CONHE&Ccedil;A NOSSOS DIFERENCIAIS</h2>
                        <hr class="divisor-vermelho">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-3 text-center">
                            <img src="img/logo_edificacoes.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Edifica&ccedil;&otilde;es</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-3 text-center">
                            <img src="img/contabil1.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Contabilidade</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-3 text-center">
                            <img src="img/creci1.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Corretagem</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-3 text-center">
                            <img src="img/logo_consultoria.png" height="180" class="rounded-circle wow pulse mb-2" data-wow-iteration="infinite">
                            <h3 style="color: #fff;">Consultoria</h3>
                            <hr class="divisor-branco">
                            <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
			</div>
		</section>


		<!-- Vantagens -->
<!--<section id="vantagens" style="background: #990000;">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md-12 text-center pt-4">
              <h2 class="text-color2 text-uppercase">administra edificações</h2>
						<hr class="divisor-branco">
					</div>
				</div>

				<div class="row">
          <div class="col-7">
              <p class="pt-5 mt-2" style="color: #fff; font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
          </div>
          <div class="col-4 text-center wow bounceIn mb-4">
              <img src="img/logo_edificacoes.png" height="220" class="wow pulse" data-wow-iteration="infinite">
          </div>
				</div>

			</div>
		</section>

    
        
		<!-- Conteúdo programático -->
<!--        
		<section id="modulos" class="py-3 bg-faded">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md-12 text-center">
						<h2 class="text-color1">Conteúdo programático</h2>
						<hr class="divisor-vermelho">
					</div>
				</div>

				<div class="row">
					<style>
						.hora-aula{
							font-size: 20px;
							font-weight: 400;
						}
					</style>
					<div class="col-md-8 push-md-2 wow fadeIn">
						<div id="groupAccordion">
							<div class="card">
								<div class="card-header">
									<h5 class="d-inline-block">
										<a href="#mod1" data-toggle="collapse" data-parent="#groupAccordion"> Sobre o Bootstrap</a></h5> 
									<b class="pull-right hora-aula text-muted">00:08:37</b>
								</div>
								<div class="collapse in" id="mod1">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Introdução" data-video="193112566">
												Introdução
											</a>
											<b class="pull-right text-muted text-info">00:02:11</b>
										</li>
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="O Bootstrap" data-video="193112566">O Bootstrap</a>

											<b class="pull-right text-muted text-info">00:06:26</b>
										</li>
									</ul>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="d-inline-block">
										<a href="#mod2" data-toggle="collapse" data-parent="#groupAccordion"> Organização de conteúdo</a></h5>
									<b class="pull-right hora-aula text-muted">00:21:01</b>
								</div>
								<div class="collapse" id="mod2">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Containers e Sistema de grids" data-video="193112670">
												Containers e Sistema de grids
											</a>
											<b class="pull-right text-muted text-info">00:08:00</b>
										</li>
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Tipografia" data-video="193112834">
												Tipografia
											</a>
											<b class="pull-right text-muted text-info">00:06:03</b>
										</li>
										<li class="list-group-item">
											Tabelas
											<b class="pull-right text-muted text-info">00:06:58
											</b>
										</li>
									</ul>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="d-inline-block">
										<a href="#mod3" data-toggle="collapse" data-parent="#groupAccordion"> Componentes básicos</a></h5>
									<b class="pull-right hora-aula text-muted">00:59:09</b>
								</div>
								<div class="collapse" id="mod3">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											Helper Classes | Parte 1
											<b class="pull-right text-muted text-info">00:06:47</b>
										</li>
										<li class="list-group-item">
											Helper Classes | Parte 2
											<b class="pull-right text-muted text-info">00:09:03</b>
										</li>
										<li class="list-group-item">
											Helper Classes | Parte 3
											<b class="pull-right text-muted text-info">00:05:40</b>
										</li>
										<li class="list-group-item">
											Botões
											<b class="pull-right text-muted text-info">00:08:23</b>
										</li>
										<li class="list-group-item">
											Ícones
											<b class="pull-right text-muted text-info">00:09:18</b>
										</li>
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Trabalhando com imagens" data-video="193113642">
												Trabalhando com imagens
											</a>
											<b class="pull-right text-muted text-info">00:04:29</b>
										</li>
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Formulários | Parte 1" data-video="193113695">
												Formulários | Parte 1
											</a>
											<b class="pull-right text-muted text-info">00:06:55</b>
										</li>
										<li class="list-group-item">
											Formulários | Parte 2
											<b class="pull-right text-muted text-info">00:08:34</b>
										</li>
									</ul>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="d-inline-block">
										<a href="#mod4" data-toggle="collapse" data-parent="#groupAccordion"> Outros componentes</a></h5>
									<b class="pull-right hora-aula text-muted">01:00:15</b>
								</div>
								<div class="collapse" id="mod4">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											Cards
											<b class="pull-right text-muted text-info">00:11:21</b>

										</li>
										<li class="list-group-item">
											Modais
											<b class="pull-right text-muted text-info">00:06:15</b>
										</li>
										<li class="list-group-item">
											Slider
											<b class="pull-right text-muted text-info">00:07:47</b>
										</li>
										<li class="list-group-item">
											Dropdowns
											<b class="pull-right text-muted text-info">00:05:23</b>
										</li>
										<li class="list-group-item">
											Collapse
											<b class="pull-right text-muted text-info">00:06:49</b>
										</li>
										<li class="list-group-item">
											Tabs
											<b class="pull-right text-muted text-info">00:03:58</b>
										</li>
										<li class="list-group-item">
											Navbar
											<b class="pull-right text-muted text-info">00:11:51</b>
										</li>
										<li class="list-group-item">
											Popover / Tooltips
											<b class="pull-right text-muted text-info">00:06:51</b>
										</li>
									</ul>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="d-inline-block">
										<a href="#mod5" data-toggle="collapse" data-parent="#groupAccordion"> Projeto final</a></h5>
									<b class="pull-right hora-aula text-muted">02:45:29</b>
								</div>
								<div class="collapse" id="mod5">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											Sobre o projeto
											<b class="pull-right text-muted text-info">00:05:22</b>
										</li>
										<li class="list-group-item">
											Estrutura, Menu e Rodapé
											<b class="pull-right text-muted text-info">00:10:30</b>
										</li>
										<li class="list-group-item">
											Seção "Topo" 
											<b class="pull-right text-muted text-info">00:10:02</b>
										</li>
										<li class="list-group-item">
											Seção "O que aprenderei?" 
											<b class="pull-right text-muted text-info">00:07:43</b>
										</li>
										<li class="list-group-item">
											Seção "Degustação"
											<b class="pull-right text-muted text-info">00:06:22</b>
										</li>
										<li class="list-group-item">
											Seção "Algumas Vantagens"
											<b class="pull-right text-muted text-info">00:08:39</b>
										</li>
										<li class="list-group-item">
											Seção "Conteúdo programático"
											<b class="pull-right text-muted text-info">00:06:59</b>
										</li>
										<li class="list-group-item">
											Seção "Investimento"
											<b class="pull-right text-muted text-info">00:15:17</b>
										</li>
										<li class="list-group-item">
											Seção "Depoimentos"
											<b class="pull-right text-muted text-info">00:11:55</b>
										</li>
										<li class="list-group-item">
											Seções  "Sobre o autor" e "Entre em contato"
											<b class="pull-right text-muted text-info">00:10:54</b>
										</li>
										<li class="list-group-item">
											Outras customizações
											<b class="pull-right text-muted text-info">00:08:10</b>
										</li>
										<li class="list-group-item">
											ScrollSpy, Navegação por âncoras e Rolagem suave
											<b class="pull-right text-muted text-info">00:08:15</b>
										</li>
										<li class="list-group-item">
											Extra: Modais dinâmico para vídeos 
											<b class="pull-right text-muted text-info">00:16:00</b>
										</li>
										<li class="list-group-item">
											Animações dos elementos
											<b class="pull-right text-muted text-info">00:14:10</b>
										</li>
										<li class="list-group-item">
											Responsividade e Media Queries
											<b class="pull-right text-muted text-info">00:04:41</b>
										</li>
										<li class="list-group-item">
											Ajustes Responsivo | Parte 1
											<b class="pull-right text-muted text-info">00:03:45</b>
										</li>
										<li class="list-group-item">
											Ajustes Responsivo | Parte 2
											<b class="pull-right text-muted text-info">00:05:57</b>
										</li>
										<li class="list-group-item">
											Ajustes Responsivo | Parte 3
											<b class="pull-right text-muted text-info">00:10:39</b>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Comprar -->
<!--        
		<section id="comprar" class="py-3 bg-inverse text-white">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md-12 text-xs-center">
						<h2 class="display-4">Investimento</h2>
						<hr class="divisor-white">
						<p class="lead">Compre o treinamento agora e tenha acesso a 5 horas de conteúdo em vídeo, dividido em 5 módulos e 40 aulas</p>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-12 text-xs-center">
						<p class="display-3 text-success mb-0 wow tada" data-wow-offset="200"> R$ 220,00</p>
						<span class="text-muted">OU</span>
						<h3 class="lead text-muted">12x de R$ 18,33</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 push-md-3 text-xs-center">
						<a href="https://www.mxcursos.com/bootstrap-4-0-treinamento-essencial" class="btn btn-block btn-success btn-lg wow pulse" data-wow-delay="5s"><i class="fa fa-lock fa-lg fa-fw"></i>QUERO COMPRAR</a>
					</div>
				</div>

				<div class="row mt-1 text-xs-center">
					<div class="col-md-6 push-md-3">
						<div class="metodo">
							<i class="fa fa-credit-card fa-lg"></i>
							Cartão de crédito
						</div>
						<div class="metodo">
							<i class="fa fa-barcode fa-lg"></i>
							Boleto bancário
						</div>
						<div class="metodo">
							<i class="fa fa-exchange fa-lg"></i>
							Depósito ou transferencia
						</div>
					</div>
				</div>
			</div>
		</section>
-->
    
    <section>
        <div class="container mt-4">
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

    <footer style="background: #2a2c32">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav justify-content-center mt-5">
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #868e96 !important; border-right: 1px solid #868e96;" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #868e96 !important; border-right: 1px solid #868e96;" href="#">Empresa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #868e96 !important; border-right: 1px solid #868e96;" href="#">Im&oacute;veis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #868e96 !important; border-right: 1px solid #868e96;" href="#">Servi&ccedil;os</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #868e96 !important;" disabled" href="#">Contato</a>
              </li>
            </ul>        
          </div>
        </div>
      </div>    

      <div class="container mt-5">
        <div class="row">
          <div class="col-4">
            <p class="py-0 my-0" style="color: #fff; font-size: 1.140em;">Matriz | Barra Mansa | RJ</p>
              <ul class="list-group">
                <li class="list-group-item text-secondary py-1 px-0" style="background-color: #2a2c32; border: none;">
                  <a href="#" class="text-color1" style="font-size: 1.125em;">Im&oacute;veis em Barra Mansa</a>
                </li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Rua Jos&eacute; Marcelino de Camargo, 1041</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Centro</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">CEP: 27400-000</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Tel: (24) 3323-1040 / 3328-6600</li>
              </ul>            
          </div>  
          <div class="col-4">
            <p class="py-0 my-0" style="color: #fff; font-size: 1.140em;">Filial | Porto Real | RJ</p>
              <ul class="list-group">
                <li class="list-group-item text-secondary py-1 px-0" style="background-color: #2a2c32; border: none;">
                  <a href="#" class="text-color1" style="font-size: 1.125em;">Im&oacute;veis em Porto Real</a>
                </li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Rua Ouro Preto, 142</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Vilage</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">CEP: 27400-000</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Tel: (24) 3353-3733</li>
              </ul>            
          </div>  
          <div class="col-4">
            <p class="py-0 my-0" style="color: #fff; font-size: 1.140em;">Filial | Angra dos Reis | RJ</p>
              <ul class="list-group">
                <li class="list-group-item text-secondary py-1 px-0" style="background-color: #2a2c32; border: none;">
                  <a href="#" class="text-color1" style="font-size: 1.125em;">Im&oacute;veis em Angra dos Reis</a>
                </li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Rua Coronel CArvalho, 44/102</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Centro</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">CEP: 27400-000</li>
                <li class="list-group-item text-secondary py-0 px-0" style="background-color: #2a2c32; border: none;">Tel: (24) 3365-4686</li>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--        <script src="js/wow.min.js"></script>   -->
		<script>
			new WOW().init();
		</script>

		<script src="js/land.js"></script>

    <script>
      $(document).ready(function() {
        $('#myModal').modal('show');
      })    
    </script>

    <script src="baguetteBox.js-dev/dist/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>    

	</body>
</html>
<?php
mysql_free_result($detalhes);
?>