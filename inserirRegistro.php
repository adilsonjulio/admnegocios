<?php

include 'conexao.php';
include 'resize-class.php';

$recebe_lancamento = $_POST['lancamento'];
$recebe_tipo = $_POST['tipo'];
$recebe_titulo = $_POST['titulo'];
$recebe_bairro = $_POST['bairro'];
$recebe_cidade = $_POST['cidade'];
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


$destino = "upload/";


preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto2['name'],$extencao2);
$img_nome2 = md5(uniqid(time())).".".$extencao2[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto3['name'],$extencao3);
$img_nome3 = md5(uniqid(time())).".".$extencao3[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto4['name'],$extencao4);
$img_nome4 = md5(uniqid(time())).".".$extencao4[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto5['name'],$extencao5);
$img_nome5 = md5(uniqid(time())).".".$extencao5[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto6['name'],$extencao6);
$img_nome6 = md5(uniqid(time())).".".$extencao6[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto7['name'],$extencao7);
$img_nome7 = md5(uniqid(time())).".".$extencao7[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto8['name'],$extencao8);
$img_nome8 = md5(uniqid(time())).".".$extencao8[1];

preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto9['name'],$extencao9);
$img_nome9 = md5(uniqid(time())).".".$extencao9[1];


try {
	
	$inserir=$conexao->query("INSERT INTO imoveis (lancamento, tipo, bairro, cidade, titulo, descricao, preco, foto1, foto2, foto3, foto4, foto5, foto6, foto7, foto8, foto9) VALUES ('$recebe_lancamento', '$recebe_tipo', '$recebe_bairro', '$recebe_cidade', '$recebe_titulo', '$recebe_descricao', '$recebe_preco', '$img_nome1', '$img_nome2', '$img_nome3', '$img_nome4', '$img_nome5', '$img_nome6', '$img_nome7', '$img_nome8', '$img_nome9')");
	

    move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
    $resizeObj = new resize($destino.$img_nome1);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome1, 100);	

    move_uploaded_file($recebe_foto2['tmp_name'], $destino.$img_nome2);             
    $resizeObj = new resize($destino.$img_nome2);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome2, 100);	

	move_uploaded_file($recebe_foto3['tmp_name'], $destino.$img_nome3);             
    $resizeObj = new resize($destino.$img_nome3);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome3, 100);	

	move_uploaded_file($recebe_foto4['tmp_name'], $destino.$img_nome4);             
    $resizeObj = new resize($destino.$img_nome4);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome4, 100);	

	move_uploaded_file($recebe_foto5['tmp_name'], $destino.$img_nome5);             
    $resizeObj = new resize($destino.$img_nome5);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome5, 100);	

	move_uploaded_file($recebe_foto6['tmp_name'], $destino.$img_nome6);             
    $resizeObj = new resize($destino.$img_nome6);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome6, 100);	

	move_uploaded_file($recebe_foto7['tmp_name'], $destino.$img_nome7);             
    $resizeObj = new resize($destino.$img_nome7);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome7, 100);	

	move_uploaded_file($recebe_foto8['tmp_name'], $destino.$img_nome8);             
    $resizeObj = new resize($destino.$img_nome8);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome8, 100);	

	move_uploaded_file($recebe_foto9['tmp_name'], $destino.$img_nome9);             
    $resizeObj = new resize($destino.$img_nome9);
    $resizeObj -> resizeImage(1024, 768, 'crop');
    $resizeObj -> saveImage($destino.$img_nome9, 100);	

 
  
  header('location:lista.php');

		
}catch(PDOException $e) {
	
	
	echo $e->getMessage();
	
}


?>