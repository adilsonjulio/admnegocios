<?php

include 'conexao.php';

$recebe_email = $_POST['email'];

$consulta = $conexao->query("SELECT nome, senha, email FROM usuarios WHERE email='$recebe_email'");

if ($consulta->rowCount()==0){
  
  header('location:erro2.php');
  
} else {
  
  echo 'Esse email já está cadastrado!!!';
  
}


?>