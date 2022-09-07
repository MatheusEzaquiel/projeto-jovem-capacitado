<?php
try{
    DEFINE("HOST","localhost");
    DEFINE("DB","bd_jovem_capacitado");
    DEFINE("USER","root");
    DEFINE("PASSWORD","mmmm");

    $connect = new PDO ('mysql:host='.HOST.';dbname='.DB,USER,PASSWORD);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $erro){
    echo "ERRO de PDO (Database Conection) = ".$erro->getMessage();
}


