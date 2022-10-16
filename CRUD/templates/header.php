<?php 

include_once("helpers/url.php");

?>  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create, Read, Update, Delete">
    <title>CRUD</title>
    <link rel="stylesheet" <?= $url ?> href="css/styles.css"> 
</head>
    
<body>
     <header>
     <a href="<?=$url?>" id="logo"> <!-- Atribuindo link da homepage no id de logo ( ou seja: a imagem de logo que tem este id) --> 
        <img src="<?=$url?>/img/logo.png" alt="Cesta Nobre"> <!-- Puxando a imagem da logo e atribuindo o nome --> 
       </a>
       <a href="<?=$url?>" id="logo2"> <!-- além do exemplo acima, também coloca dentro de <a> deixando colocar um ID -->
       <img src="<?=$url?>/img/logo2.png" alt="Applicativa Logo"> <!-- Puxando a imagem da logo e atribuindo o nome --> 
        </a>
        <a href="profile.php" id="user_user"> <!-- além do exemplo acima, também coloca dentro de <a> deixando colocar um ID -->
       <img src="<?=$url?>/img/user.png" alt="logged_user"> <!-- Puxando a imagem da logo e atribuindo o nome --> 
        </a>
       <ul id = "navbar"> 
    <ul><br></ul> <!-- espaço -->
    </ul>
    

    <ul id="header_"> 
            <li><a href="new_user.php" class="nav-link"><button id="btn">Novo Usuário</button><span class="espaco"></span></a></li> <!-- BARRA DE NAVEGAÇÃO DE NOVO USUÁRIO --> 
            <li><a href="cadastrados.php" class="nav-link"><button id="btn2">Lista de Clientes</button><span class="espaco"></span></a></li> <!-- BARRA DE NAVEGAÇÃO DE LISTA DE USUÁRIOS --> 
    </ul>
     
    </header>