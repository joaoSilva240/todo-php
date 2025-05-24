<?php
require "conexao.php";

$nome = $_POST["nome"];

$comando = $conexao->prepare("INSERT INTO categoria VALUES(0,:nome)");
$comando->bindParam(":nome",$nome);
$comando->execute();

header("Location: index.php");
// echo "Cadastro realizado com sucesso";
?>