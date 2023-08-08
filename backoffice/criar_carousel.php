<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form2 = isset($_GET["link_imagem_desktop"]) && isset($_GET["link_imagem_mobile"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]) && isset($_GET["link_saber_mais"]) ;


if($form2){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO carousel (img, titulo, subtitulo,link_botao,data_atualizacao) VALUES ('$_GET[link_imagem_desktop]', '$_GET[titulo]', '$_GET[subtitulo]', '$_GET[link_saber_mais]', '$data_atual') ");

    $id_novo = selectSQLUnico("SELECT id FROM carousel WHERE data_atualizacao='$data_atual'");


    iduSQL("INSERT INTO carousel_mobile (img, id_carousel) VALUES ('$_GET[link_imagem_mobile]','$id_novo[id]')");

    header("Location: carousel.php");  
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
                    <label for="link_imagem_desktop">Link da imagem do banner desktop:</label>
                    
                    <div>

                        <input type="text" name="link_imagem_desktop"  class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    
                </div>

                <div class="inner-forms">
                    <label for="link_imagem_mobile">Link da imagem do banner mobile:</label>
                    
                    <div>

                        <input type="text" name="link_imagem_mobile"  class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    
                </div>
                
                <div class="inner-forms">
                    <label for="titulo">Titulo do banner:</label>
                    <input type="text" name="titulo">
                </div>
                
                <div class="inner-forms">
                    <label for="subtitulo">Subtitulo do banner:</label>
                    <textarea name="subtitulo" id="" cols="100" rows="10"></textarea>
                </div>
                
                <div class="inner-forms">   
                    <label for="link_saber_mais">Link do Banner 'Saber Mais':</label>
                    <input type="text" name="link_saber_mais">
                </div>
                

                <input type="submit" value="Criar">


            
                
        </form> 

    </div>

</body>
</html>