<?php

include 'conexao.php';

$id_excluirImoveis=$_GET['id'];


$pasta = "upload/";

$consulta = $conexao->query("SELECT * FROM imoveis WHERE id='$id_excluirImoveis'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


$excluir = $conexao->query("DELETE FROM imoveis WHERE id='$id_excluirImoveis'");

$foto1=$exibe['foto1'];
$foto2=$exibe['foto2'];
$foto3=$exibe['foto3'];
$foto4=$exibe['foto4'];
$foto5=$exibe['foto5'];
$foto6=$exibe['foto6'];
$foto7=$exibe['foto7'];
$foto8=$exibe['foto8'];
$foto9=$exibe['foto9'];
$foto10=$exibe['foto10'];


if ($foto1!="") {
	
	unlink($pasta.$foto1);
	
}


if ($foto2!="") {
	
	unlink($pasta.$foto2);
	
}

if ($foto3!="") {
	
	unlink($pasta.$foto3);
	
}

if ($foto4!="") {
	
	unlink($pasta.$foto4);
	
}

if ($foto5!="") {
	
	unlink($pasta.$foto5);
	
}

if ($foto6!="") {
	
	unlink($pasta.$foto6);
	
}

if ($foto7!="") {
	
	unlink($pasta.$foto7);
	
}

if ($foto8!="") {
	
	unlink($pasta.$foto8);
	
}

if ($foto9!="") {
	
	unlink($pasta.$foto9);
	
}

if ($foto10!="") {
	
	unlink($pasta.$foto10);
	
}

header('location:lista.php');


?>