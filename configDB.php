<?php 
//configDB.php

//Dados para escolha do DataBase (DB)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sistemaDeLogin";

//Conexão com o banco de dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){
    die("Não foi possivel conectar ao 
    Banco de Dados: " . $conecta->connect_error);
}else{
    //echo "<h1>Conectou no BD Manowwww!</h1>";
}