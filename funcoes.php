<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

function Login($login, $pass){

    $utilizador = selectSQLUnico("SELECT * FROM utilizador WHERE login='$login'");

    if(!empty($utilizador)){
        if(password_verify($pass, $utilizador["pass"])){
            session_start();
            $_SESSION["utilizador"] = $utilizador;

            novoAcesso($utilizador["id"]);

            return true;
        }
        else{
            return false;
        }
    }

}

function novoAcesso($id_usuario){

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO acessos (data, id_utilizador) VALUES ('$data_atual', '$id_usuario')");

}

function getUltimoAcesso($id_usuario){
    $ultimo = selectSQLUnico("SELECT data FROM acessos WHERE id_utilizador='$id_usuario' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (!empty($ultimo)) ? $ultimo["data"] : "---";
}


function getMobileID($id){
    return selectSQLUnico("SELECT img FROM carousel_mobile WHERE id_carousel='$id'");
}


?>