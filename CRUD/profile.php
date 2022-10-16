<?php 
include_once("helpers/url.php");
include_once("templates/header.php");

?>  

<!-- AQUI VAI SER A PÁGINA DE PERFIL DO USUÁRIO DA PÁGINA -->

<div >
        <h1 id="main_homepage">
            DB USER  <br>
        </h1>
<a id="centered">
    <table id="tabela">
    <tr>
    <th style="color: green;"> Usuário</th>
    <th style="color: green;">Host</th>
  </tr>
  <tr>
    <td><?php echo $user; ?></td>
    <td><?php echo $host; ?></td>
  </tr>
</a>



