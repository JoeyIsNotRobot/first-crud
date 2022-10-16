<?php 

ini_set("display_errors",1);
error_reporting(E_ALL);

include_once("templates/header.php"); 
include_once("helpers/config.php");

// CADASTRANDO USUÁRIO

    if(isset($_POST['SALVAR'])){  

    $id=$conn->insert_id;  

        $nome=$_POST['nome']; 
        $email=$_POST['email']; 
        $cnpj=$_POST['CNPJ']; 

        $inserir_dado="INSERT INTO contas (nome,email,cnpj)  VALUES ('$nome' , '$email', '$cnpj')"; 

        $res=$conn->query($inserir_dado); 

    if($res==true){ 

        print "<script>alert ('Usuário cadastrado com sucesso'); </script>"; 
        
        }
    }

// FILTRO DE BUSCA E EXIBIÇÃO DE LISTA

        $busca = isset($_GET['busca']) ? $_GET['busca'] : null ;  
    ?>
    <br>
        <form id="centered" method="GET" action="cadastrados.php?filtrar" > 
            <div>
            <label>FILTRAGEM POR NOME</label>
                <input type="text"  name="busca" value="<?= $busca ?>">
            </div>
                <input  id="btn" type="submit" value="Filtrar">
        </form>
    <br><br>

    <?php

        if(isset($busca)){
            $qSelect = ("SELECT * FROM contas WHERE nome LIKE '$busca%' ORDER BY nome");
        }else{
            $qSelect= "SELECT * FROM contas";  
        }
        
            $result = $conn->query($qSelect); 
            $rsClientes = $result->fetch_all(MYSQLI_ASSOC); 



    

    ?> 
        <h1 id="centered"> LISTA DE CLIENTES </h1> <br><br>
        
    <table id="centered" > 
            <tr>    
                <td id ="title1">Nome</td>
                <td id ="title1">Email</td>
                <td id ="title1">Cnpj</td>
                <td id ="title1">Ações</td>
            </tr>

    <?php
        foreach ($rsClientes as $cliente){ 
    ?>
            <tr> 
                <td style="margin: 40px 0; padding-left: 0px;"><?php echo $cliente['nome']; ?> <hr class="hr1" width="500px"></td>
                <td style="margin: 40px 0; padding-left: 0px;"><?php echo $cliente['email']; ?> <hr class="hr1" width="500px"> </td>
                <td style="margin: 40px 0; padding-left: 0px;"><?php echo $cliente['cnpj']; ?> <hr class="hr1" width="300px"> </td>

                <td id="btn"> 
                    <button><a href="del.php?id=<?php echo $cliente['id']; ?> "><img src="<?=$url?>/img/delete.png" style="width: 12px;;height: 10px;" alt="Excluir"></a> </button></li>
                    <button><a href="edit.php?id=<?php echo $cliente['id']; ?> "><img src="<?=$url?>/img/edit-.png" style="width: 15px;;height: 10px;" alt="Editar"></a> </button> 
                </td>
            </tr>

    <?php 
    }
    ?>
        </table>