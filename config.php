<?php
 $user = "root";
 $pass = "";
try{
    $pdo=New PDO("mysql:dbname=projeto_ordenar;host=localhost",$user,$pass);
}catch(PDOException $err){
    echo "Erro ao se conectar".$err->getMessage();
    exit;
}
