<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form2 = isset($_GET["link_imagem"]) && isset($_GET["titulo"]) && isset($_GET["obs"]);


if($form2){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    $destaques = selectSQL("SELECT * FROM destaques");

    if(count($destaques)<3){
        iduSQL("INSERT INTO destaques (img, titulo, obs) VALUES ('$_GET[link_imagem]', '$_GET[titulo]', '$_GET[obs]') ");
    }

   
    header("Location: destaques.php");  
    exit();  
}


?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackOffice</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main_box">

        <h1>Editar</h1>

        <form class="forms">


                <div class="inner-forms">
                    <label for="link_imagem">Link da imagem do DESTAQUE:</label>
                    
                    <div>

                        <input type="text" name="link_imagem"  class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    
                </div>


                
                <div class="inner-forms">
                    <label for="titulo">Titulo do DESTAQUE:</label>
                    <input type="text" name="titulo">
                </div>
                
                <div class="inner-forms">
                    <label for="obs">OBSERVAÇÃO do DESTAQUE:</label>
                    <textarea name="obs" id="" cols="100" rows="10"></textarea>
                </div>
                
            
                <input type="submit" value="Criar">


            
                
        </form> 

    </div>

</body>
</html>