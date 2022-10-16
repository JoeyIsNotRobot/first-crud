<?php

ini_set("display_errors",1);
error_reporting(E_ALL);




$host = "localhost";
$pass = "";
$user = "root";
$db = "crud_users";
$conn = new mysqli($host,$user,$pass,$db);



/* if ($conn->connect_errno) {  

    echo "Erro na conexão";
}else{

    echo "Conexão estável";
}*/
?>  