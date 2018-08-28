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

		<script type="text/javascript">
		<!--
		function abreJanela(URL) {
		location.href = URL; // se for popup utiliza o window.open
		}
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
            <div class="container my-2">
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


<!--  -->
	<div class="container-fluid  bg-color-2">	
		<div class="container">
			<div class="row">
			<h3 class="text-white font-weight-normal m-0 py-2">BUSCA DE IM&Oacute;VEIS</h3>
		</div>
		</div>
	</div>	
		
	<div class="container-fluid py-3">
		<div class="container py-3" style="background: #f1f1f1;">
			<form action="busca1.php" method="POST" enctype="multipart/form-data" target="_self" id="formBusca">
				<div class="form-row">
					<div class="form-group col-md-4">
					  <label for="inputEmail4">Palavra-chave</label>
					  <input name="nome_curso" id="busca" type="text" class="form-control" placeholder="Digite a palavra chave">
					</div>
	 	         <div class="form-group col-md-4">
		            <label for="inputState">Cidade</label>
		            <select name="conteudo_curso" class="form-control">
		              <option selected>Selecione</option>
		                <?php
		                $consulta = $conexao->query("SELECT * FROM imoveis GROUP BY cidade"); 
		                while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
		                ?>
		              <option><?php echo $exibe['cidade'];?>
		              </option>
		                <?php } ?>
		              </select>
		          </div>

 	 	         <div class="form-group col-md-4">
		            <label for="inputState">Tipo de Negócios</label>
		            <select name="paginas" onchange="javascript: abreJanela(this.value)" class="form-control">
			            <option selected>Selecione</option>
							<option value="busca.php">VENDA</option>
							<option value="cadastroImovel.php">ALUGUEL</option>
	              	</select>
		          </div>
 	 	         <div class="form-group col-md-4">
		            <label for="inputState">Tipo de Negócios</label>
		            <select name="paginas" onchange="javascript: abreJanela(this.value)" class="form-control">
			            <option selected>Selecione</option>
							<option value="busca.php">VENDA</option>
							<option value="cadastroImovel.php">ALUGUEL</option>
	              	</select>
		          </div>
<!--				<div class="form-row">
 					<div class="form-group col-md-3">
					  <label for="inputState">Bairro</label>
					  <input type="email" class="form-control" id="inputEmail4" placeholder="Digite o bairro">
					</div>
 -->					<div class="form-group col-md-4">
					  <label for="inputState">Faixa de Valor</label>
					  <select id="inputState" class="form-control">
						<option selected>Selecione</option>
						<option>R$ 5.000,00 </option>
						<option>R$ 10.000,00 </option>
						<option>R$ 20.000,00 </option>
						<option>R$ 50.000,00 </option>
						<option>R$ 100.000,00 </option>
						<option>R$ 200.000,00 </option>
						<option>R$ 300.000,00 </option>
						<option>R$ 400.000,00 </option>
						<option>R$ 500.000,00 </option>
						<option>R$ 600.000,00 </option>
					  </select>
					</div>
					<div class="form-group col-md-4">
							 <button type="submit" class="btn btn-primary px-4 py-1 float-right" style="margin-top: 30px !important; font-size: 20px; background: #d50000; border: #000;">Buscar im&oacute;veis</button>
					</div>
				</div>
			</form>
		</div>	
	</div>			
		
	<section class="" id="imoveis" class="pb-5 bg-faded wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200"; style="background:#f2f2f2; padding-bottom: 20px;">
		<div class="container pt-4">
			<div class="row mb-1">
				<div class="col-md-12 text-center">
                <h3>IM&Oacute;VEIS EM DESTAQUE</h3>
                <hr class="divisor-vermelho">
				</div>
			</div>

			<div class="container pt-4">
				<div class="row">
				
          <?php


					if(empty($_GET['pg'])){}else{
						$pg = $_GET['pg'];
						if(!is_numeric($pg)){
							echo '<script language= "JavaScript">
							location.href="index2.php?acao=index2";
							</script>';
						}
				
					}

					if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

					$quantidade = 12;
					$inicio = ($pg*$quantidade) - $quantidade;					

			// Limitar texto		
			include ("functions/limita-texto.php");

          // Fazer a seleção do banco de dados
          $select = "SELECT * FROM imoveis ORDER BY id DESC LIMIT $inicio, $quantidade";

          try{
            $result = $conexao->prepare($select);
            $result->execute();
            $contar = $result->rowCount();
            if($contar>0){
             while ($mostra = $result->FETCH(PDO::FETCH_OBJ)){

          ?> 

				<div class="col-sm-4 col-md-4 pl-1 pb-5">
					<a href="detalhes2.php?id=<?php echo $mostra->id;?>" style="text-decoration: none;">
					<div class="hoverzoom" style="box-shadow: 0 0 5px rgba(0,0,0,0.2);">
						<img src="upload/<?php echo $mostra->foto1;?>" class="img-fluid">
						<div class="retina" style="padding: 0px;">
							<h4 class="mt-5 pt-5 text-color-1" style="font-weight:600; margin-top: 70px !important;">Mais Detalhes...</h4>
						</div>
						<div class="card text-white" style="max-width: 100%; border-radius: 0; border: 0;">
							<div class="card-header card-header-mn py-0" style="background: #fff; border-radius: 0; border-bottom: 0px solid #fff;">
							  <h5 class="card-title mt-2 mb-1" style="color: #444; font-weight: 600;"><?php echo $mostra->titulo;?></h5>
							  <p class="card-text mt-2 mb-3 text-color-5"><?php echo $mostra->bairro;?> - <?php echo $mostra->cidade;?></p>
							  <p class="card-text border-top pt-3" style="font-size: 15px; color: #808080; height: 150px"><?php echo limitarTexto($mostra->descricao, $limite=200)?></p>
							</div>
							<div class="d-flex px-2 bg-color-2">
								<div class="mr-auto p-1 pb-2 text-muted text-uppercase" style="color: #fff !important; font-size: 18px; font-weight: 600;">
								<?php echo $mostra->tipo;?>
								</div>
								<div class="p-1"class="text-muted" style="color: #fff !important; font-size: 20px; font-weight: 600;">R$ <?php echo number_format($mostra->preco,2,',','.');?>
								</div>
							</div>
<!-- 							<div class="d-flex px-2 py-1 border">
								<div class="mr-auto p-1"class="text-muted text-uppercase" style="color: #000 !important; font-size: 18px; font-weight: 600;"><?php echo $mostra->tipo;?>
								</div>
								<div class="p-1"class="text-muted" style="color: #000 !important; font-size: 20px; font-weight: 600;">
								<button type="button" class="btn btn-color-1">VER DETALHES</button>
								</div>
							</div>
 -->						</div>						
						</a>
					</div>
				</div>

					<?php		
							
						}

					}else{
						echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
										<strong>Aviso!</strong> Não há dados cadastrados no banco de dados.
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';      
								}

					}catch(PDOExecption $e){
					echo $e;
					} 

					?>

				</div>
			</div>

			<style>		
			/* Ajuste paginação com PHP */
			.paginas {
					width: 100%;
					padding: 10px 0;
					text-align: center;
					background: #fff;
					height: auto;
					margin: 10px auto 0;
			}

			.paginas a {
					width: auto;
					padding: 4px 10px;
					background: #eee;
					color: #333;
					margin: 0px 2.5px;
			}

			.paginas a:hover {
					text-decoration: none;
					background: #ff1b1f;
					color: #fff;
			}

			<?php
			if(isset($_GET['pg'])){
					$num_pg = $_GET['pg'];
				}else{$num_pg = 1;} 
			?>

			.paginas a.ativo<?php echo $num_pg;?> {
				background: #ff1b1f;
					color: #fff;

			}
			</style>

			<!-- Inicio paginação -->
			<?php
				$sql = "SELECT * FROM imoveis";
				try{
						
				$result = $conexao->prepare($sql);
				$result->execute();
				$totalRegsitros = $result->rowCount();
			}catch(PDOExecption $e){
				echo $e;
				} 
			
			if($totalRegsitros <=$quantidade){}
				else{
					$paginas = ceil($totalRegsitros/$quantidade);
					if($pg > $paginas){
						echo '<script language= "JavaScript">
						location.href="index.php?acao=index2";
						</script>';}

						$links = 5;

					if(isset($i)){}
						else{$i = '1';}
			?>

		<!-- Inicio botao páginas -->			
		<div class="paginas">

			<a href="index.php?acao=index&pg=1"><i class="fas fa-angle-double-left"></i></a>			

			<?php
				if(isset($_GET['pg'])){
					$num_pg = $_GET['pg'];
				}
				for($i = $pg-$links; $i <= $pg-1; $i++){

					if($i<=0){}
					else{ 
			?>

			<a href="index.php?acao=index&pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>

			<?php }}?>

			<a href="index.php?acao=index&pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>

			<?php 
				for($i = $pg+1; $i <= $pg+$links; $i++){
					if($i>$paginas){}
						else{
			?>

			<a href="index.php?acao=index&pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>

			<?php
					}
				}		
			?>

			<a href="index.php?acao=index&pg=<?php echo $paginas;?>" class="ativo<?php echo $i;?>"><i class="fas fa-angle-double-right"></i></a>

		</div>		
		<!-- Fim botao páginas -->			


		<?php
					}
		?>

	</section>		<!-- Fim seção imóveis para locação  -->
	
					
		<div id="servicos"></div>

        <section class="pt-" style="background: #2a2c32;">
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


		<!-- Vantagens -->
<!--<section id="vantagens" style="background: #990000;">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md-12 text-center pt-4">
              <h2 class="text-color2 text-uppercase">administra edifica��es</h2>
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

    
        
		<!-- Conte�do program�tico -->
<!--        
		<section id="modulos" class="py-3 bg-faded">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md-12 text-center">
						<h2 class="text-color1">Conte�do program�tico</h2>
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
											<a href="" class="nav-link videoModal" data-titulo="Introdu��o" data-video="193112566">
												Introdu��o
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
										<a href="#mod2" data-toggle="collapse" data-parent="#groupAccordion"> Organiza��o de conte�do</a></h5>
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
										<a href="#mod3" data-toggle="collapse" data-parent="#groupAccordion"> Componentes b�sicos</a></h5>
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
											Bot�es
											<b class="pull-right text-muted text-info">00:08:23</b>
										</li>
										<li class="list-group-item">
											�cones
											<b class="pull-right text-muted text-info">00:09:18</b>
										</li>
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Trabalhando com imagens" data-video="193113642">
												Trabalhando com imagens
											</a>
											<b class="pull-right text-muted text-info">00:04:29</b>
										</li>
										<li class="list-group-item">
											<a href="" class="nav-link videoModal" data-titulo="Formul�rios | Parte 1" data-video="193113695">
												Formul�rios | Parte 1
											</a>
											<b class="pull-right text-muted text-info">00:06:55</b>
										</li>
										<li class="list-group-item">
											Formul�rios | Parte 2
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
											Estrutura, Menu e Rodap�
											<b class="pull-right text-muted text-info">00:10:30</b>
										</li>
										<li class="list-group-item">
											Se��o "Topo" 
											<b class="pull-right text-muted text-info">00:10:02</b>
										</li>
										<li class="list-group-item">
											Se��o "O que aprenderei?" 
											<b class="pull-right text-muted text-info">00:07:43</b>
										</li>
										<li class="list-group-item">
											Se��o "Degusta��o"
											<b class="pull-right text-muted text-info">00:06:22</b>
										</li>
										<li class="list-group-item">
											Se��o "Algumas Vantagens"
											<b class="pull-right text-muted text-info">00:08:39</b>
										</li>
										<li class="list-group-item">
											Se��o "Conte�do program�tico"
											<b class="pull-right text-muted text-info">00:06:59</b>
										</li>
										<li class="list-group-item">
											Se��o "Investimento"
											<b class="pull-right text-muted text-info">00:15:17</b>
										</li>
										<li class="list-group-item">
											Se��o "Depoimentos"
											<b class="pull-right text-muted text-info">00:11:55</b>
										</li>
										<li class="list-group-item">
											Se��es  "Sobre o autor" e "Entre em contato"
											<b class="pull-right text-muted text-info">00:10:54</b>
										</li>
										<li class="list-group-item">
											Outras customiza��es
											<b class="pull-right text-muted text-info">00:08:10</b>
										</li>
										<li class="list-group-item">
											ScrollSpy, Navega��o por �ncoras e Rolagem suave
											<b class="pull-right text-muted text-info">00:08:15</b>
										</li>
										<li class="list-group-item">
											Extra: Modais din�mico para v�deos 
											<b class="pull-right text-muted text-info">00:16:00</b>
										</li>
										<li class="list-group-item">
											Anima��es dos elementos
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
						<p class="lead">Compre o treinamento agora e tenha acesso a 5 horas de conte�do em v�deo, dividido em 5 m�dulos e 40 aulas</p>
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
							Cart�o de cr�dito
						</div>
						<div class="metodo">
							<i class="fa fa-barcode fa-lg"></i>
							Boleto banc�rio
						</div>
						<div class="metodo">
							<i class="fa fa-exchange fa-lg"></i>
							Dep�sito ou transferencia
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Depoimentos -->
<!--    
		<section id="depoimentos" class="py-3 mt-5">
			<div class="container">
				<div class="row mb-1">
					<div class="col-md-12 text-center">
						<h2 class="text-color1">Depoimentos</h2>
						<hr class="divisor-vermelho">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="aspas text-xs-center mb-2">
							<i class="fa fa-quote-left fa-3x"></i>
						</div>
						<div class="carousel slide" id="slider" data-ride="carousel" data-interval="5000">
							<ol class="carousel-indicators">
								<li data-target="#slider" data-slide-to="0" class="active"></li>
								<li data-target="#slider" data-slide-to="1"></li>
								<li data-target="#slider" data-slide-to="2"></li>
							</ol>

							<div class="carousel-inner">
								<div class="carousel-item active text-xs-center">
									<img src="https://www.mxcursos.com/catalog/view/theme/mxcursos/img/flavio.jpg"  width="90" class="rounded-circle mb-1">

									<p class="lead">Conhe�o o grupo h� muito tempo e o que mais me encanta al�m da qualidade dos cursos, � o cuidado e respeito que eles tem pelos alunos.</p>

								</div>
								<div class="carousel-item text-xs-center">
									<img src="https://www.mxcursos.com/catalog/view/theme/mxcursos/img/rafael.jpg"  width="90" class="rounded-circle mb-1">

									<p class="lead depoimento">Consegui desenvolver projetos profissionais e lucrar com isso ap�s fazer basicamente todos os cursos do grupo focando nos treinamentos de e-commerce.</p>

								</div>

								<div class="carousel-item text-xs-center">
									<img src="https://www.mxcursos.com/catalog/view/theme/mxcursos/img/antonilza.jpg"  width="90" class="rounded-circle mb-1">

									<p class="lead ">Fiz os cursos de e-commerce, e consegui desenvolver a loja virtual da pink sweet, um e-commerce voltado para moda feminina e potencializar minhas vendas.</p>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Autor -->
    <!--
		<section class="bg-faded">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center p-3">
						<img src="img/logo_administra_empresa.png" height="100">
						<h4 class="mt-1">A Empresa</h4>
						<h6 class="text-muted">Conhe�a nossa hist�ria</h6>
						<p class="pt-1 px-1">Com 8+ anos de atua��o na �rea de desenvolvimento pra web, adquiriu paix�o por programa��o, em especial o PHP. Atua na �rea de Back-End nos projetos no qual participa. Fundador da <a target="_blank" href="http://duckyo.com">Duckyo</a>, startup com solu��es com foco em automatiza��o de SEO, Derlan tem como responsabilidades a busca por solu��es criativas para seus clientes, e aplica��o de novas tecnologias pra melhora de performance.</p>

						<div class="">
							<a href="https://linkedin.com/in/derlanlima" class="btn btn-outline-primary">
								<i class="fa fa-linkedin"></i>
							</a>
							<a href="https://instagram.com/derlanlima" class="btn btn-outline-primary">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="https://facebook.com/derlanlima" class="btn btn-outline-primary">
								<i class="fa fa-facebook"></i>
							</a>


						</div>
					</div>
					<div class="col-md-6 bg-gray p-3">
						<h3 class="text-color1 text-xs-center py-1">Entre em contato</h3>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu nome">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Seu email">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="7" placeholder="Escreva sua mensagem aqui..."></textarea>
							</div>
							<div class="col-lg-6 push-lg-3 p-0">
								<a href="https://mxcursos.com/contato" class="btn  btn-primary btn-lg btn-block">Enviar <i class="fa fa-send fa-fw"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
-->
    
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

		<!--Rodap�-->
<!--        
		<nav class="navbar navbar-dark navbar-full bg-inverse">
			<div class="container text-xs-center text-sm-left">
				<img src="img/logo-im-mx.png" height="40">
				<span class="navbar-text float-sm-right" style="color: #979797">Feito com <i class="fa fa-heart text-danger wow pulse" data-wow-iteration="infinite"></i> por <b>Derlan Lima</b> �2016</span>
			</div>
		</nav>

		<!-- Modal V�deo -->
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
