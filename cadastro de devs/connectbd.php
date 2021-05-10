<?php

$server = "localhost";
$user = "root"; 			//Necessário inserir nome de usuario do Mysql entre aspas
$password = "sqlmanager127";			//Necessário inserir senha de usuario utilizado do Mysql entre aspas
$dbname = "devs_db";	//Informar o nome do banco de dados

//Criar a conexao

$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>
