<?php

require_once("../Config/config.php");
require_once("../Config/base_dados.php");
require_once("funcoes.php");

$form = isset($_POST["login"]) && isset($_POST["pass"]);



if($form){
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    
    if(Login($login, $pass)){

        session_start();
        $_SESSION["utilizador"] = selectSQLUnico("SELECT * FROM utilizador where login='$login'");

        header("Location: inicio.php");
    }
    else{
        header("Location: index.php?log=false");
    }
}
else{
    header("Location: index.php");
}

?>