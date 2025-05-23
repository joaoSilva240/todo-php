<?php
require "conexao.php";

$nome = $_POST["name"];

$comando = $conexao->prepare("INSERT INTO categoria VALUES(0,:nome)");
$comando->binParam(":nome",$nome);
$comando->execute();

echo "Cadastro realizado com sucesso";
?>