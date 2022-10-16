<?php 
include_once("templates/header.php"); 
include_once("helpers/config.php");
?> 
<br><br><br><br><br><br>
<h1 id=centered>USUÁRIO ACABA DE SER DELETADO COM SUCESSO!</h1>
<br>
<h1 id=centered>DESEJA VOLTAR PARA A PÁGINA DE LISTA DE CLIENTES?</h1>
<br>


<?php

echo "<button> <a href='cadastrados.php'>VOLTAR PARA LISTA DE CLIENTES</a> </button> ";
echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
echo "<button> <a href='index.php'>VOLTAR PARA A PÁGINA INICIAL</a> <button>";

$id = filter_input(INPUT_GET, 'id'); // GETR POR QUE ESTOU RECEBENDO PELA URL UMA VARIÁVEL CHAMADA ID

// EXCLUSÃO DE DADOS: 

$result_usuario = "DELETE FROM contas WHERE id = $id";
$resultado_usuario = mysqli_query($conn, $result_usuario);















?>







