<?php 
 ini_set("display_errors",1);
 error_reporting(E_ALL);


include_once("helpers/url.php");
include_once("templates/header.php");


?>  

    <!-- AQUI SERÁ CRIADO O FORMULÁRIO DE NOVO USUÁRIO -->

<div>
    <h1 id="centered">ORIGENS DE CLIENTES</h1>
    <h2 id="centered">Cadastro de novos usuários </h2><br>

    <p id="centered">Preencha todos os campos para prosseguir:</p>
    <br>
</div>

<form action="cadastrados.php" method="POST"> <!--  para onde vai: cadastrados, o que faz? = POST "envia" -->
    <fieldset> <!-- CAIXA QUE JUNTA OS CAMPOS -->
<br>
        <div id="centered">
            <label for="nome" style="padding: 10px;">Nome</label>
            <input type="text" name="nome"  placeholder="Digite seu nome" required>
        </div>
<br>
        <div id="centered">
            <label for="email" style="padding: 10px;">Email</label>
            <input type="email" name="email" placeholder="Digite seu email"  required>
        </div>
<br>
        <div id="centered">
            <label for="CNPJ" style="padding: 10px;">CNPJ</label>
            <input type="text" name="CNPJ" placeholder="Digite seu CNPJ" required>
        </div>
<br>
        <div>
            <input id="btn" type="submit" name="SALVAR" value="Salvar Dados" id="save_button">
        </div>

    </fieldset> <!-- CAIXA QUE JUNTA OS CAMPOS -->
</form>
