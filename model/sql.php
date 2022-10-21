<?php
try{
    $link=new PDO("mysql:host=localhost;dbname=nkstudios","root","");
    
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->exec("SET NAMES utf8");
}catch(PDOException $e){
    echo "Erro de conexão!".$e->getMessage();
}
?>