<?php

$servidor = "localhost";
$usuario = "root";
$senha= "";
$bd = "todo";

try{
    $conexao = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $senha);
}catch(PDOException $e){
    echo "Não foi possivel conectar ao servidor";
    exit;
}
?>