<?php require_once('Connections/administranego.php'); ?>

<?php mysql_select_db($database_administranego, $administranego); 


$recebe_lancamento = $_POST['campoLancamento'];
$recebe_tipo = $_POST['campoTipo'];
$recebe_titulo = $_POST['campoTitulo'];
$recebe_descricao = $_POST['campoDescricao'];
$recebe_preco = $_POST['campoPreco'];

$recebe_fotoSlide = $_FILES['campoFotoSlide']['name'];
$recebe_foto1 = $_FILES['campoFoto1']['name'];
$recebe_foto2 = $_FILES['campoFoto2']['name'];
$recebe_foto3 = $_FILES['campoFoto3']['name'];
$recebe_foto4 = $_FILES['campoFoto4']['name'];
$recebe_foto5 = $_FILES['campoFoto5']['name'];
$recebe_foto6 = $_FILES['campoFoto6']['name'];
$recebe_foto7 = $_FILES['campoFoto7']['name'];
$recebe_foto8 = $_FILES['campoFoto8']['name'];
$recebe_foto9 = $_FILES['campoFoto9']['name'];
$recebe_foto10 = $_FILES['campoFoto10']['name'];

$tmp_fotoSlide = $_FILES['campoFotoSlide']['tmp_name'];
$tmp_foto1 = $_FILES['campoFoto1']['tmp_name'];
$tmp_foto2 = $_FILES['campoFoto2']['tmp_name'];
$tmp_foto3 = $_FILES['campoFoto3']['tmp_name'];
$tmp_foto4 = $_FILES['campoFoto4']['tmp_name'];
$tmp_foto5 = $_FILES['campoFoto5']['tmp_name'];
$tmp_foto6 = $_FILES['campoFoto6']['tmp_name'];
$tmp_foto7 = $_FILES['campoFoto7']['tmp_name'];
$tmp_foto8 = $_FILES['campoFoto8']['tmp_name'];
$tmp_foto9 = $_FILES['campoFoto9']['tmp_name'];
$tmp_foto10 = $_FILES['campoFoto10']['tmp_name'];

$sql = "INSERT INTO imoveis (lancamento, tipo, titulo, descricao, preco, fotoSlide, foto1, foto2, foto3, foto4, foto5, foto6, foto7, foto8, foto9, foto10) VALUES ( '$recebe_lancamento', '$recebe_tipo', '$recebe_titulo', '$recebe_descricao', '$recebe_preco', '$recebe_fotoSlide', '$recebe_foto1', '$recebe_foto2', '$recebe_foto3', '$recebe_foto4', '$recebe_foto5', '$recebe_foto6', '$recebe_foto7', '$recebe_foto8', '$recebe_foto9', '$recebe_foto10')";

if (mysql_query($sql) or die("Erro ao salvar aos dados--> ".mysql_error()));

move_uploaded_file($tmp_fotoSlide,'upload/'.$recebe_fotoSlide);
move_uploaded_file($tmp_foto1,'upload/'.$recebe_foto1);
move_uploaded_file($tmp_foto2,'upload/'.$recebe_foto2);
move_uploaded_file($tmp_foto3,'upload/'.$recebe_foto3);
move_uploaded_file($tmp_foto4,'upload/'.$recebe_foto4);
move_uploaded_file($tmp_foto5,'upload/'.$recebe_foto5);
move_uploaded_file($tmp_foto6,'upload/'.$recebe_foto6);
move_uploaded_file($tmp_foto7,'upload/'.$recebe_foto7);
move_uploaded_file($tmp_foto8,'upload/'.$recebe_foto8);
move_uploaded_file($tmp_foto9,'upload/'.$recebe_foto9);
move_uploaded_file($tmp_foto10,'upload/'.$recebe_foto10);

//header ("Location:menu.php");
?>
