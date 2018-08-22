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
    

    <script type="text/javascript">
    $(function(){
        $("#campoPreco").maskMoney();
    })
    </script>
    
    <script type="text/javascript">
	$(function(){
	 $("#demo4").maskMoney({symbol:'R$ ', 
	showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
	 })
	</script>

    </head>
    
<body>
   <div class="container-fluid no-padding" style="background: #D50000;">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light" style="background: #D50000">
            <a class="navbar-brand" style="font-size: 26px; font-weight: 600;">Área Administrativa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navb-content">
               <ul class="navbar-nav" style="font-size: 20px;">
                  <li class="nav-item active">
                     <a class="nav-link" style="color: #fff !important;" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" style="color: #fff !important;" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" style="color: #fff !important;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item style="color: #fff !important;" href="#">Action</a>
                        <a class="dropdown-item style="color: #fff !important;" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>  
      </div>
   </div>

   <div class="container my-5">
      <h3>Cadastrar Imóveis</h3>
   </div>      

   <div class="container">
      <form action="inserirRegistro.php" method="post" enctype="multipart/form-data" target="_self" id="formInserir">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Lançamento</label>
          <select name="campoLancamento" required="required" class="custom-select mb-2 mr-sm-2 mb-sm-0 ml-3" id="campoLancamento">
            <option value="1">Sim</option>
          </select>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo de Negócio</label>
          <select name="campoTipo" required="required" class="custom-select mb-2 mr-sm-2 mb-sm-0 ml-3" id="campoTipo">
            <option value="VENDA">Venda</option>
            <option value="ALUGUEL">Aluguel</option>
          </select>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Título</label>
          <div class="col-sm-10">
            <input name="campoTitulo" type="text" required="required" class="form-control" id="campoTitulo" placeholder="Título do Imóvel" maxlength="255">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Descrição</label>
          <div class="col-sm-10">
            <input name="campoDescricao" type="text" class="form-control" id="campoDescricao" placeholder="Descrição Completa do Imóvel">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Valor do Imóvel</label>
          <div class="col-sm-10">
            <input name="campoPreco" type="text" class="form-control" id="campoPreco" placeholder="Valor do Imóvel">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto do Slide</label>
		  	<input type="file" name="campoFotoSlide" id="campoFotoSlide" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 1</label>
		  	<input type="file" name="campoFoto1" id="campoFoto1" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 2</label>
		  	<input type="file" name="campoFoto2" id="campoFoto2" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 3</label>
		  	<input type="file" name="campoFoto3" id="campoFoto3" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 4</label>
		  	<input type="file" name="campoFoto4" id="campoFoto4" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 5</label>
		  	<input type="file" name="campoFoto5" id="campoFoto5" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 6</label>
		  	<input type="file" name="campoFoto6" id="campoFoto6" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 7</label>
		  	<input type="file" name="campoFoto7" id="campoFoto7" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 8</label>
		  	<input type="file" name="campoFoto8" id="campoFoto8" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 9</label>
		  	<input type="file" name="campoFoto9" id="campoFoto9" class="ml-3">
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Foto 10</label>
		  	<input type="file" name="campoFoto10" id="campoFoto10" class="ml-3">
          </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" name="submit" id="submit" class="btn btn-primary" style="background: #D50000; border: #D50000;">Cadastrar Imóvel</button>
          </div>
        </div>
      </form>
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
    <script src="js/jquery.maskMoney.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>

</body>
</html>