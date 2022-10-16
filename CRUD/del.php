<?php 
include_once("templates/header.php"); 
include_once("helpers/config.php");



$id = $_GET['id'];

echo "<h1 id='centered'> Quer mesmo excluir o registro do usuário: $id ? </h1>";
echo "<button><a href='delete.php?id=" . $id . "'>EXCLUIR</a> </button>";
echo "<br>";
echo "<button> <a href='cadastrados.php'>NÃO EXCLUIR ( Você voltará para a listagem de clientes )</a> <button>";
