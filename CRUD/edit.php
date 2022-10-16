<?php 
include_once("templates/header.php"); 
include_once("helpers/config.php"); 

ini_set("display_errors",1);
error_reporting(E_ALL);

echo "<a href='cadastrados.php'>VOLTAR</a>"; // BOTÃO DE VOLTAR

if(!empty($_GET['id'])){ // SE O ID NÃO ESTIVER VAZIO 

        $id = $_GET['id']; 

        $sqlSelect = "SELECT * FROM contas WHERE id = $id";

        $result = $conn->query($sqlSelect); // EXECUÇÃO DA QUERY

            // print_r($result); // MOSTRA QUE A TENTATIVA DE PEGAR OS DADOS DO BANCO DE DADOS SELECIONADO PELO $ID FOI BEM SUCEDIDA
 

    if($result->num_rows > 0){
            // EM RESULT MOSTRA O NÚMERO DE LINHAS COM BASE NAS INFORMAÇÕES OFERECIDAS PELO ID = ID NO BANCO DE DADOS
            // OU SEJA: SE EXISTIR UM NUMERO MAIOR DE LINHAS (QUE CONTÉM DADOS) MAIOR DO QUE 0, PEGAREI O NOME,EMAIL,CNPJ

        while($conn = mysqli_fetch_assoc($result) ){ // EM QUANTO A CONEXÃO FOR IGUAL A ASSOC DA VARIAVEL RESULT ( QUE É O ID  E SEUS DADOS)
        $nome = $conn['nome'];
        $email = $conn['email'];
        $cnpj = $conn['cnpj'];
        }

    }
    else{
        header('location: index.php');  // O cabeçalho de resposta Location indica o URL para qual página deve-se ser redirecionada
    }

}

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form method="POST" action="saveEdit.php">
    <td>
    <fieldset>  
    <br>

        <div id='centered'>
            <h3 id='centered'>NOME DE USUÁRIO: </h3><input name = "nome" type="text" placeholder="<?php echo $nome ?>" value="<?= $nome?>" >
        </div>
        <br>

        <div id='centered'>
            <h3 id='centered'>EMAIL DE USUÁRIO: </h3><input name = "email" type="email" placeholder="<?php echo $email ?>" value="<?= $email ?>" >
        </div>
        <br>

        <div id='centered'> 
            <h3 id='centered'>CNPJ DE USUÁRIO: </h3><input name="cnpj" type="text" placeholder="<?php echo $cnpj ?>" value="<?= $cnpj ?>" >
        </div>
        <br>

        <div id="centered">
            <input type="hidden" name="id" value="<?php echo $id ?>"> 
            <input type="submit" name="atualizar" value="Atualizar" id="atualizar">
        </div>
        <br>

    </fieldset>
    </td>
</form>

