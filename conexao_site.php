<?php

try{
	
$conexao = new PDO('mysql:host=mysql.administranegocios.com.br;dbname=administranego;charset=utf8',"administranego",'adm1234', array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch(PDOexception $e){
	
	echo 'Erro na conexão:'.$e->getMessage().'<br>';
	echo 'Código do erro:'.$e->getCode();
}

?>