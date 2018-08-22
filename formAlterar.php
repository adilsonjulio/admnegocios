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
		
	session_start();
	
	if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
		
		header('location:adm.php');
	}
	
	$id_imov = $_GET['id'];
	
	include 'conexao.php';
	
	$consulta = $conexao->query("SELECT * FROM imoveis WHERE id='$id_imov'");
	$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
	
	?>
	
	
	<div class="container-fluid bg-dark py-4 text-center">
		<img src="img/logo_fundo_transp.png" class="rounded mx-auto d-block" alt="...">    
		<h2 class="text-white">AdministraNegócios</h2>
	</div>
	
<div class="container-fluid no-padding" style="background: #D50000;">
   <div class="container">
			<ul class="nav justify-content-center py-1">
			  <li class="nav-item ml-5">
				  <a class="nav-link" style="color: #fff !important;" href="adm.php"><h5>Menu</h5></a>
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
				<h1 class="display-5 py-5 text-center">Cadastro de Imóveis</h1>
					<form method="post" action="alterarRegistro.php?id=<?php echo $id_imov;?>" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="marca">Lançamento</label>
							<select class="form-control" name="lancamento" id="lancamento">
							  <option value="1" <?=($exibe['lancamento'] == '1')?'selected':''?>>SIM</option>
							  <option value="0">NÃO</option>
							</select>
						</div>
						
						<div class="form-group pt-3">
						<label for="departamento">Tipo de Negócio</label>
						<select class="form-control" name="tipo" id="tipo">
						  <option value="VENDA">VENDA</option>
						  <option value="ALUGUEL">ALUGUEL</option>
						</select>
						</div>

						<div class="form-group pt-3">
							<label for="bairro">Bairro</label>
							<input type="text" class="form-control" required name="bairro" value="<?php echo $exibe['bairro'] ?>" id="bairro">
						</div>

						<div class="form-group pt-3">
							<label for="cidade">Cidade</label>
							<input type="text" class="form-control" required name="cidade" value="<?php echo $exibe['cidade'] ?>" id="cidade">
						</div>

						<div class="form-group pt-3">
							<label>Título do Imóvel</label>
							<textarea rows="1" class="form-control" required name="titulo" id="titulo"><?php echo $exibe['titulo'] ?></textarea>
						</div>

						<div class="form-group pt-3">
							<label>Descrição do Imóvel</label>
							<textarea rows="5" class="form-control" required name="descricao" id="descricao"><?php echo $exibe['descricao'] ?></textarea>
						</div>

						<div class="form-group pt-3">
							<label for="preco">Valor</label>
							<input type="text" class="form-control" required name="preco" value="<?php echo $exibe['preco'] ?>" id="preco">
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 1</label>
							<input type="file" accept="image/*" class="form-control" name="foto1" id="foto1">
							<img src="upload/<?php echo $exibe['foto1'] ?>" width="50">							
							<?php echo $exibe['foto1'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 2</label>
							<input type="file" accept="image/*" class="form-control" name="foto2" id="foto2">
							<img src="upload/<?php echo $exibe['foto2'] ?>" width="50">
							<?php echo $exibe['foto2'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 3</label>
							<input type="file" accept="image/*" class="form-control" name="foto3" id="foto3">
							<img src="upload/<?php echo $exibe['foto3'] ?>" width="50">
							<?php echo $exibe['foto3'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 4</label>
							<input type="file" accept="image/*" class="form-control" name="foto4" id="foto4">
							<img src="upload/<?php echo $exibe['foto4'] ?>" width="50">
							<?php echo $exibe['foto4'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 5</label>
							<input type="file" accept="image/*" class="form-control" name="foto5" id="foto5">
							<img src="upload/<?php echo $exibe['foto5'] ?>" width="50">
							<?php echo $exibe['foto5'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 6</label>
							<input type="file" accept="image/*" class="form-control" name="foto6" id="foto6">
							<img src="upload/<?php echo $exibe['foto6'] ?>" width="50">
							<?php echo $exibe['foto6'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 7</label>
							<input type="file" accept="image/*" class="form-control" name="foto7" id="foto7">
							<img src="upload/<?php echo $exibe['foto7'] ?>" width="50">
							<?php echo $exibe['foto7'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 8</label>
							<input type="file" accept="image/*" class="form-control" name="foto8" id="foto8">
							<img src="upload/<?php echo $exibe['foto8'] ?>" width="50">
							<?php echo $exibe['foto8'] ?>
						</div>

						<div class="form-group">
							<label for="foto2">Imagem 9</label>
							<input type="file" accept="image/*" class="form-control" name="foto9" id="foto9">
							<img src="upload/<?php echo $exibe['foto9'] ?>" width="50">
							<?php echo $exibe['foto9'] ?>
						</div>
					
					<button type="submit" class="btn btn-outline-danger btn-lg mt-4">Salvar Alterações</button>
				
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