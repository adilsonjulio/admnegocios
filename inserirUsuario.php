<?php

include 'conexao.php';

$recebe_nome = $_POST['nome'];
$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

//echo $recebe_nome.'<br>';
//echo $recebe_email.'<br>';
//echo $recebe_senha.'<br>';

$consulta = $conexao->query("SELECT email from usuarios WHERE email='$recebe_email'");

//$exibe=$consulta->fetch(PDO::FETCH_ASSOC);

  if ($consulta->rowCount()==1) {
    
    header('location:erro1.php');
    
  } else {
    
    try{
    
    $incluir = $conexao->query("
    
      INSERT INTO usuarios (nome, email, senha, adm) VALUES (
      
        '$recebe_nome',
        '$recebe_email',
        '$recebe_senha',
        '0')");
    
      header('location:ok,php');
      
    } catch(PDOExeption $e) {
      
      echo $e->getMessage(); 
      
    }
      
  }


?>