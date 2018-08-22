<?php

include 'conexao.php';
include 'resize-class.php';

$id_alteraimoveis = $_GET['id'];
$consulta = $conexao->query("SELECT * FROM imoveis WHERE id='$id_alteraimoveis'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


;$recebe_lancamento = $_POST['lancamento'];
$recebe_tipo = $_POST['tipo'];
$recebe_titulo = $_POST['titulo'];
$recebe_descricao = $_POST['descricao'];
$recebe_preco = $_POST['preco'];


$remover1='.';
$recebe_preco = str_replace($remover1, '', $recebe_preco);
$remover2=',';
$recebe_preco = str_replace($remover2, '.', $recebe_preco);

$recebe_foto1 = $_FILES['foto1'];
$recebe_foto2 = $_FILES['foto2'];
$recebe_foto3 = $_FILES['foto3'];
$recebe_foto4 = $_FILES['foto4'];
$recebe_foto5 = $_FILES['foto5'];
$recebe_foto6 = $_FILES['foto6'];
$recebe_foto7 = $_FILES['foto7'];
$recebe_foto8 = $_FILES['foto8'];
$recebe_foto9 = $_FILES['foto9'];
$recebe_foto10 = $_FILES['foto10'];


$destino = "upload/";


if (!empty($recebe_foto1['name'])) {

	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
	$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

	$upload_foto1=1;

}

else {
	
	$img_nome1=$exibe['foto1'];
	$upload_foto1=0;
	
}

if (!empty($recebe_foto2['name'])) {
	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao2);
	$img_nome2 = md5(uniqid(time())).".".$extencao2[1];
	$upload_foto2=1;

}

else {
	
	$img_nome2=$exibe['foto2'];
	$upload_foto2=0;
	
}

if (!empty($recebe_foto3['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao3);
	$img_nome3 = md5(uniqid(time())).".".$extencao3[1];
	$upload_foto3=1;

}

else {
	
	$img_nome3=$exibe['foto3'];
	$upload_foto3=0;
	
}
	
if (!empty($recebe_foto4['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto4['name'],$extencao4);
	$img_nome4 = md5(uniqid(time())).".".$extencao4[1];
	$upload_foto4=1;

}

else {
	
	$img_nome4=$exibe['foto4'];
	$upload_foto4=0;
	
}

if (!empty($recebe_foto5['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto5['name'],$extencao5);
	$img_nome5 = md5(uniqid(time())).".".$extencao5[1];
	$upload_foto5=1;

}

else {
	
	$img_nome5=$exibe['foto5'];
	$upload_foto5=0;
	
}
	
if (!empty($recebe_foto6['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto6['name'],$extencao6);
	$img_nome6 = md5(uniqid(time())).".".$extencao6[1];
	$upload_foto6=1;

}

else {
	
	$img_nome6=$exibe['foto6'];
	$upload_foto6=0;
	
}
	
if (!empty($recebe_foto7['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto7['name'],$extencao7);
	$img_nome7 = md5(uniqid(time())).".".$extencao7[1];
	$upload_foto7=1;

}

else {
	
	$img_nome7=$exibe['foto7'];
	$upload_foto7=0;
	
}
	
if (!empty($recebe_foto8['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto8['name'],$extencao8);
	$img_nome8 = md5(uniqid(time())).".".$extencao8[1];
	$upload_foto8=1;

}

else {
	
	$img_nome8=$exibe['foto8'];
	$upload_foto8=0;
	
}
	
if (!empty($recebe_foto9['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto9['name'],$extencao9);
	$img_nome9 = md5(uniqid(time())).".".$extencao9[1];
	$upload_foto9=1;

}

else {
	
	$img_nome9=$exibe['foto9'];
	$upload_foto9=0;
	
}
	
if (!empty($recebe_foto10['name'])) {


	preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto10['name'],$extencao10);
	$img_nome10 = md5(uniqid(time())).".".$extencao10[1];
	$upload_foto10=1;

}

else {
	
	$img_nome9=$exibe['foto9'];
	$upload_foto9=0;
	
}
	

try {
	
	$alterar = $conexao->query("UPDATE imoveis SET
	
	lancamento = '$recebe_lancamento',
	tipo = '$recebe_tipo',
	titulo = '$recebe_titulo',
	descricao = '$recebe_descricao',
	preco = '$recebe_preco',
	preco = '$recebe_preco',
	foto1 = '$img_nome1',
	foto2 = '$img_nome2',
	foto3 = '$img_nome3',
	foto4 = '$img_nome4',
	foto5 = '$img_nome5',
	foto6 = '$img_nome6',
	foto7 = '$img_nome7',
	foto8 = '$img_nome8',
	foto9 = '$img_nome9',
	foto10 = '$img_nome10'
	
	WHERE id = '$id_alteraimoveis'
	
	");
	
	
	if ($upload_foto1==1) {
		
		
		move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
		$resizeObj = new resize($destino.$img_nome1);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome1, 100);
		
	}

	
	
	if ($upload_foto2==1) {
		
		move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome2);             
		$resizeObj = new resize($destino.$img_nome2);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome2, 100);
	
		
	}
	
	if ($upload_foto3==1) {
		
		move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome3);             
		$resizeObj = new resize($destino.$img_nome3);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome3, 100);
	
	}
	
	if ($upload_foto4==1) {
		
		move_uploaded_file($recebe_foto4['tmp_name'], $destino.$img_nome4);             
		$resizeObj = new resize($destino.$img_nome4);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome4, 100);
	
	}
	
	if ($upload_foto5==1) {
		
		move_uploaded_file($recebe_foto5['tmp_name'], $destino.$img_nome5);             
		$resizeObj = new resize($destino.$img_nome5);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome5, 100);
	
	}
	
	if ($upload_foto6==1) {
		
		move_uploaded_file($recebe_foto6['tmp_name'], $destino.$img_nome6);             
		$resizeObj = new resize($destino.$img_nome6);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome6, 100);
	
	}
	
	if ($upload_foto7==1) {
		
		move_uploaded_file($recebe_foto7['tmp_name'], $destino.$img_nome7);             
		$resizeObj = new resize($destino.$img_nome7);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome7, 100);
	
	}
	
	if ($upload_foto8==1) {
		
		move_uploaded_file($recebe_foto8['tmp_name'], $destino.$img_nome8);             
		$resizeObj = new resize($destino.$img_nome8);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome8, 100);
	
	}
	
	if ($upload_foto9==1) {
		
		move_uploaded_file($recebe_foto9['tmp_name'], $destino.$img_nome9);             
		$resizeObj = new resize($destino.$img_nome9);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome9, 100);
	
	}
	
	if ($upload_foto10==1) {
		
		move_uploaded_file($recebe_foto10['tmp_name'], $destino.$img_nome10);             
		$resizeObj = new resize($destino.$img_nome10);
		$resizeObj -> resizeImage(960, 640, 'crop');
		$resizeObj -> saveImage($destino.$img_nome10, 100);
	
	}
	

  header('location:adm.php');
  
} catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}



?>