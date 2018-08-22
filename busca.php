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

$colname_busca = "-1";
if (isset($_GET['campoBusca'])) {
  $colname_busca = $_GET['campoBusca'];
}
mysql_select_db($database_administranego, $administranego);
$query_busca = sprintf("SELECT * FROM imoveis WHERE descricao LIKE %s ORDER BY id DESC", GetSQLValueString("%" . $colname_busca . "%", "text"));
$busca = mysql_query($query_busca, $administranego) or die(mysql_error());
$row_busca = mysql_fetch_assoc($busca);
$totalRows_busca = mysql_num_rows($busca);
 header("Content-Type: text/html; charset=ISO-8859-1", true);?>
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
	<div class="container-fluid no-padding">
 	   <div class="container-fluid no-padding img-header" style="background: #000; height: 32px;" id="inicio">		
              <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                        <ul class="list-inline pull-right">
                          <li class="list-inline-item"><i class="fa fa-phone-square" aria-hidden="true" style="font-size:20px; color:#fff;"></i></li>
                          <li class="list-inline-item pr-4" style="font-size: 18px; line-height: 32px; font-weight: 600; color: #fff; font-weight: 500;">24 3323-1040 / 33238-6600</li>
                          <li class="list-inline-item"><i class="fa fa-envelope-square" aria-hidden="true" style="font-size:20px; color:#fff;"></i></li>
                          </li>
                          <li class="list-inline-item pr-4" style="font-size: 20px; line-height: 32px; font-weight: 600; color: #fff; font-weight: 500;">contato@administranegocios.com.br
                          </li>
                          <li class="list-inline-item">
                          <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="font-size: 20px; color: #fff;"></i></a>
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
                    <a class="nav-link ml-4 scroll" href="#inicio">Home</a>
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

		<!-- Topo -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
				<img class="d-block w-100" height="500" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
				<h3></h3>
				</div>                
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/imagem3.jpg" height="500" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>        

	<div class="container-fluid pb-4" style="background-color: #fff;">		
		<div class="container px-0" style="background-color: #f2f2f2;">		
			<div class="p-3 mb-2 text-white font-weight-normal" style="background-color: #d50000; font-size: 20px;">BUSCA DE IM&Oacute;VEIS</div>
				<div class="container py-3">
				<form action="busca.php" method="get" target="_self" id="formBusca">
					<div class="form-row">
						<div class="form-group col-md-4">
						  <label for="inputEmail4">Palavra-chave</label>
						  <input name="campoBusca" type="text" class="form-control" id="campoBusca" placeholder="Digite aqui a palavra chave">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputEmail4">C&oacute;digo de refer&ecirc;ncia</label>
						  <input type="email" class="form-control" id="inputEmail4" placeholder="Digite aqui o código">
						</div>
						<div class="form-group col-md-4">
						  <label for="inputState">Tipo</label>
						  <select id="inputState" class="form-control">
							<option selected>Qualquer</option>
							<option>Casas</option>
							<option>Apartamentos</option>
							<option>Terrenos</option>
							<option>Loca&ccedil;&atilde;o</option>
						  </select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
						  <label for="inputState">Cidade</label>
						  <input type="email" class="form-control" id="inputEmail4" placeholder="Digite aqui a cidade">
						</div>
						<div class="form-group col-md-3">
						  <label for="inputState">Bairro</label>
						  <input type="email" class="form-control" id="inputEmail4" placeholder="Digite aqui o bairro">
						</div>
						<div class="form-group col-md-3">
						  <label for="inputState">Valor m&aacute;ximo</label>
						  <select id="inputState" class="form-control">
							<option selected>Qualquer</option>
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
						<div class="form-group col-md-3">
								 <button type="submit" class="btn btn-primary px-4 py-1 float-right" style="margin-top: 30px !important; font-size: 20px; background: #d50000; border: #000;">Buscar im&oacute;veis</button>
						</div>
					</div>
				</form>		
			</div>			
		</div>			
	</div>			
		
	  <section class="" id="imoveis" class="pb-5 bg-faded wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200"; style="background:#f2f2f2;">
			<div class="container pt-4">
			  <div class="row mb-1">
				<div class="col-md-12 text-center">
				  <h3>IM&Oacute;VEIS EM DESTAQUE</h3>
				  <hr class="divisor-vermelho">
				</div>
			  </div>

			  <div class="container pt-4">
				<div class="row">
				  <?php do { ?>
				  <div class="col-sm-4 col-md-4 pl-1 pb-5">
					<div class="hoverzoom" style="box-shadow: 0 0 5px rgba(0,0,0,0.2);">
					  <img src="upload/<?php echo $row_busca['foto1']; ?>" class="img-fluid">
					  <div class="retina" style="padding: 0px;">
						<a href="detalhes.php?id=<?php echo $row_busca['id']; ?>" style="height: 100%; width: 100%; margin: 0;">
						  <h5 class="mt-5 pt-4" style="color: #fff; font-weight:600;">Mais Detalhes...</h5>
						</div>
						<div class="card text-white" style="max-width: 100%; border-radius: 0; border: 0;">
						  <div class="card-header card-header-mn py-0" style="background: #fff; border-radius: 0; border-bottom: 0px solid #fff;">
							<h5 class="card-title text-center mt-3" style="color: #000; font-weight: 600; height: 2.50rem;"><?php echo $row_busca['titulo']; ?></h5>
							<p class="card-text mt-4 text-justify" style="color: #212529; height: 180px"><?php echo $row_busca['descricao']; ?></p>
						  </div>
						  <div class="d-flex px-2" style="background: #D50000">
							<div class="mr-auto p-1"class="text-muted text-uppercase" style="color: #fff !important; font-size: 18px; font-weight: 600;">
							</div>
							<div class="p-1"class="text-muted" style="color: #fff !important; font-size: 18px; font-weight: 600;"><?php echo number_format($row_busca['preco'],2,',','.'); ?></div>
						  </div>
						</div>
					  </div>						
					</a>
				  </div>
				<?php } while ($row_busca = mysql_fetch_assoc($busca)); ?>
				</div>
			  </div>
			</div>

			<nav aria-label="Page navigation example">
			  <ul class="pagination justify-content-center">
				<li class="page-item"> Primeiro </li>
				<li class="page-item"> Anterior

				</td>
			  </li>

			  <li class="page-item"> Pr&oacute;ximo

			  </td>
			</li>
			<li class="page-item"> &Uacute;ltimo
			</td>
		  </li>
		</ul>
		</nav>

		<div class="container">
		  <p class="text-center">Registros  a  de </p>
		</div>	
		</div>
	</section>	


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
                <a class="nav-link py-0 px-4" style="font-size: 1.25em; color: #fff !important;" disabled" href="#">Contato</a>
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

	</body>
</html>
<?php
mysql_free_result($busca);
?>
