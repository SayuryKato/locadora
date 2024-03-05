<?php 
function Connect(){
    $bdconnect = "mysql:dbname=locadora;host=localhost";
    $bduser = "root";
    $bdpassword = "";

    try{
        $connect = new PDO($bdconnect, $bduser, $bdpassword); 
        return $connect;
    }catch(PDOException $erro ){
        echo 'Error ao conectar o banco de dados'.$erro->getMessage();
    }
    
}