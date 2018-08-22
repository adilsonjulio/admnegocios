<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.1.2/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	  
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
  
  <?php
  
  session_start();
  
  if (empty($_SESSION['adm']) || $_SESSION['adm']!=1) {
    
    header('location:index.php');
    
  }
  
	include 'conexao.php';
	
  ?>
  
  
	<div class="container-fluid bg-dark py-4 text-center">
		<img src="img/logo_fundo_transp.png" class="rounded mx-auto d-block" alt="...">    
		<h2 class="text-white">AdministraNegócios</h2>
	</div>
	
<div class="container-fluid no-padding" style="background: #D50000;">
   <div class="container">
			<ul class="nav justify-content-center py-1" style="font-size: 24px;">
			  <li class="nav-item ml-5">
				  <a class="nav-link" style="color: #fff !important;" href="adm.php"><h5>Menu</h5></a>
			  </li>
			  <li class="nav-item ml-5">
				<a class="nav-link" style="color: #fff !important;" href="formCadastrar.php"><h5>Cadastrar Imóvel</h5></a>
			  </li>
			  <li class="nav-item ml-5">
				<a class="nav-link" style="color: #fff !important;" href="index.php"><h5>Sair</h5></a>
			  </li>
			</ul>
	</div>
</div>
	

<div class="container my-5 p-3 text-center">
      <h2>Imóveis Cadastrados</h2>
   </div>      
	
   <div class="container">
      <table class="table">
         <thead class="bg-secondary text-white" style="background: #D50000;">
            <tr>
               <th scope="col">Nº</th>
               <th scope="col">Imagen</th>
               <th scope="col">Título</th>
               <th scope="col">Bairro</th>
               <th scope="col">Cidade</th>
               <th scope="col">Descrição</th>
               <th scope="col">Tipo</th>
               <th scope="col">Valor</th>
               <th colspan="2" scope="col" class="text-center">Ações</th>
            </tr>
         </thead>
         <tbody>
					<?php

            $consulta = $conexao->query("SELECT * FROM imoveis ORDER BY id DESC");

            $sql = "SELECT * FROM imoveis";
            try{
                
              $result = $conexao->prepare($sql);
              $result->execute();
              $totalRegsitros = $result->rowCount();
              }catch(PDOExecption $e){
              }

            $contagem = $totalRegsitros;

					while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
					?>
              <tr>
                <th scope="row"><?php echo $contagem--;?></th>
                <td><img src="upload/<?php echo $exibe['foto1'] ?>" width="100"></td>
                <td><?php echo $exibe['tipo']?></td>
                <td><?php echo $exibe['titulo']?></td>
                <td><?php echo $exibe['bairro']?></td>
                <td><?php echo $exibe['cidade']?></td>
                <td style="font-variant:normal"><?php echo $exibe['descricao']?></td>
                <td><?php echo number_format($exibe['preco'],2,',','.'); ?></td>
                <td><a href="formAlterar.php?id=<?php echo $exibe['id']; ?>" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Alterar</a></td>
                <td><a href="excluirRegistro.php?id=<?php echo $exibe['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> Excluir</a></td>
              </tr>
					<?php } ?>
			</tbody>
      </table>
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