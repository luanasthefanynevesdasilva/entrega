<?php
$hostname= "localhost";
$user= "root";
$password="";
$database= "dados";
$conexao= mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print"Falha na conexão com o banco de dados";
}


?>