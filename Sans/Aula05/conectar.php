<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "aula_php";

$strcon = mysqli_connect($servername, $username, $password, $database);

if (!$strcon) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
echo "Sucesso na Conexão";    