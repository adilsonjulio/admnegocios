<?php

include 'conexao.php';
include 'resize-class.php';

$recebe_titulo = $_POST['titulo'];

$recebe_foto1 = $_FILES['foto1'];


$destino = "upload/";


preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
$img_nome1 = md5(uniqid(time())).".".$extencao1[1];

try {
    
    $inserir=$conexao->query("INSERT INTO carousel (titulo, foto1) VALUES ('$recebe_titulo', '$img_nome1')");
    

    move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
    $resizeObj = new resize($destino.$img_nome1);
    $resizeObj -> resizeImage(1200, 450, 'crop');
    $resizeObj -> saveImage($destino.$img_nome1, 100);  
 
  
  header('location:lista.php');

        
}catch(PDOException $e) {
    
    
    echo $e->getMessage();
    
}


?>