<?php

include 'conexao.php';

session_start();

$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

//echo $recebe_email.'<br>';
//echo $recebe_senha.'<br>';

$consulta = $conexao->query("SELECT id_user, email, senha, adm FROM usuarios WHERE email='$recebe_email' AND senha='$recebe_senha'");

if ($consulta->rowCount()==1) {

  $exibeUser=$consulta->fetch(PDO::FETCH_ASSOC);
  
  if ($exibeUser['adm']==0) {

  $_SESSION['id']=$exibeUser['id_user'];
  $_SESSION['adm']=0;  

  header('location:adm.php');

  }
  
  else {

  $_SESSION['id']=$exibeUser['id_user'];
  $_SESSION['adm']=1;  

  header('location:adm.php');
    
  }
  
}

else {

  header('location:erro.php');

}

?>