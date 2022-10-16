<?php 

ini_set("display_errors",1);
error_reporting(E_ALL);

include_once("templates/header.php"); 
include_once("helpers/config.php"); 

if(isset($_POST['atualizar'])){

    $id = $_POST['id']; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];

$sqlUpdate = "UPDATE contas SET nome='{$nome}', email='{$email}', cnpj='{$cnpj}' WHERE id = '{$id}'";


$resUpdate = $conn->query($sqlUpdate);
}

header('location: cadastrados.php');


?>

 

