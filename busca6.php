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

  include 'conexao.php';

$nome = $_POST['buscaNome']; 
$login = $_POST['buscaLogin']; 

if($nome != ""){ $nome_no_where = "AND nome LIKE '%".$nome."%'"; }else {$nome_no_where = "";} 
if($login != ""){ $login_no_where = "AND login LIKE '%".$login."%'"; }else {$login_no_where = "";} 


$busca = "select * FROM imoveis where id <> '0' $descricao $cidade order by nome";
?>


<form name="busca" id="busca" action="busca6.php" method="post"> 
Nome: <input type='text' name='buscaNome' id='buscaNome' value='' /> 
Login: <input type='text' name='buscaLogin' id='buscaLogin' value='' style="width:60px" /> 
<input type='submit' name='buscar' id='buscar' value='Buscar' style="width:100px" /> 
</form> 

<?php

$todos = mysql_query("$busca"); 

?>
dai ajeita a tabela 

<table> 
<tr> 
<th> 
Nome: 
</th> 
<th> 
Login: 
</th> 
</tr> 
<? 
while($result = mysql_fetch_array($todos)) 
{ 
?> 
<tr> 
<td> 
<?=$dados["nome"]; ?> 
</td> 
<td> 
<?=$dados["login"]; ?> 
</td> 
</tr> 
</table> 



  </body>
</html>
