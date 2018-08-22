<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>

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

	<script language="javascript">
	//-----------------------------------------------------
	//Funcao: MascaraMoeda
	//Sinopse: Mascara de preenchimento de moeda
	//Parametro:
	//   objTextBox : Objeto (TextBox)
	//   SeparadorMilesimo : Caracter separador de milésimos
	//   SeparadorDecimal : Caracter separador de decimais
	//   e : Evento
	//Retorno: Booleano
	//Autor: Gabriel Fróes - www.codigofonte.com.br
	//-----------------------------------------------------
	function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
		var sep = 0;
		var key = '';
		var i = j = 0;
		var len = len2 = 0;
		var strCheck = '0123456789';
		var aux = aux2 = '';
		var whichCode = (window.Event) ? e.which : e.keyCode;
		if (whichCode == 13) return true;
		key = String.fromCharCode(whichCode); // Valor para o código da Chave
		if (strCheck.indexOf(key) == -1) return false; // Chave inválida
		len = objTextBox.value.length;
		for(i = 0; i < len; i++)
			if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
		aux = '';
		for(; i < len; i++)
			if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
		aux += key;
		len = aux.length;
		if (len == 0) objTextBox.value = '';
		if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
		if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
		if (len > 2) {
			aux2 = '';
			for (j = 0, i = len - 3; i >= 0; i--) {
				if (j == 3) {
					aux2 += SeparadorMilesimo;
					j = 0;
				}
				aux2 += aux.charAt(i);
				j++;
			}
			objTextBox.value = '';
			len2 = aux2.length;
			for (i = len2 - 1; i >= 0; i--)
			objTextBox.value += aux2.charAt(i);
			objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
		}
		return false;
	}
	</script>

    </head>
    
<body>
	
	
	<div class="container-fluid bg-dark py-4 text-center">
		<img src="img/logo_fundo_transp.png" class="rounded mx-auto d-block" alt="...">    
		<h2 class="text-white">AdministraNegócios</h2>
	</div>
	
<div class="container-fluid no-padding" style="background: #D50000;">
   <div class="container">
			<ul class="nav justify-content-center">
			  <li class="nav-item ml-5">
				  <a class="nav-link" style="color: #fff !important;" href="menu.php"><h5>Menu</h5></a>
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
					<form action="inserirRegistro.php" method="post" enctype="multipart/form-data" target="_self" id="formInserir">
						<div class="form-group">
							<label for="marca">Lançamento</label>
							<select class="form-control"  required name="campoLancamento" id="campoLancamento">
							  <option value="1">SIM</option>
							</select>
						</div>
					<div class="form-group pt-3">
					<label for="departamento">Tipo de Negócio</label>
					<select class="form-control" required name="campoTipo" id="campoTipo">
					  <option value="VENDA">VENDA</option>
					  <option value="ALUGUEL">ALUGUEL</option>
					</select>
					</div>

					<div class="form-group pt-3">
						<label>Título do Imóvel</label>
						<textarea rows="1" class="form-control" required name="campoTitulo" id="campoTitulo" placeholder="Descreve aqui o título do anúncio"></textarea>
					</div>
						
					<div class="form-group pt-3">
						<label>Descrição do Imóvel</label>
						<textarea rows="5" class="form-control" required name="campoDescricao" id="campoDescricao" placeholder="Descreve aqui todos os detalhes do Imóvel"></textarea>
					</div>

					<div class="form-group pt-3">
						<label for="preco">Valor</label>
						<input type="text" class="form-control" required name="campoPreco" id="campoPreco" placeholder="Valor do Imóvel">
					</div>
					
					<div class="form-group pt-3">
						<label for="foto2">Foto do Banner</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFotoSlide" id="campoFotoSlide">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 1</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto1" id="campoFoto1">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 2</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto2" id="campoFoto2">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 3</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto3" id="campoFoto3">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 4</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto4" id="campoFoto4">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 5</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto5" id="campoFoto5">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 6</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto6" id="campoFoto6">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 7</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto7" id="campoFoto7">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 8</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto8" id="campoFoto8">
					</div>
					<div class="form-group">
						<label for="foto2">Foto 9</label>
						<input type="file" accept="image/*" class="form-control" required name="campoFoto9" id="campoFoto9">
					</div>
					
					
					
					<button type="submit" class="btn btn-outline-danger btn-lg mt-4">Cadastrar Imóvel</button>
				
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