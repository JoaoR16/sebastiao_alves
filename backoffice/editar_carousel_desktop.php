<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form = isset($_GET["id"]);
$form2 = isset($_GET["id"]) && isset($_GET["link_imagem"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]) && isset($_GET["link_saber_mais"]) ;

if(!$form){
    header("Location: index.php");  
    exit();  
}
else{
    $id=$_GET["id"];
    $dados = selectSQL("SELECT * FROM carousel WHERE id='$id'");
}

if($form2){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("UPDATE carousel SET img='$_GET[link_imagem]', titulo='$_GET[titulo]', subtitulo='$_GET[subtitulo]', link_botao='$_GET[link_saber_mais]', data_atualizacao='$data_atual'  WHERE id='$_GET[id]'");

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

            <?php foreach($dados as $d): ?>

                <input type="hidden" name="id" value="<?=$id?>" > 

                <div class="inner-forms">
                    <label for="link_imagem">Link da imagem do banner:</label>
                    
                    <div>

                        <input type="text" name="link_imagem" value="<?= $d['img']?>" class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    

                </div>
                
                <div class="inner-forms">
                    <label for="titulo">Titulo do banner:</label>
                    <input type="text" name="titulo" value="<?=$d['titulo']?>">
                </div>
                
                <div class="inner-forms">
                    <label for="subtitulo">Subtitulo do banner:</label>
                    <textarea name="subtitulo" id="" cols="100" rows="10"><?=$d['subtitulo']?></textarea>
                </div>
                
                <div class="inner-forms">   
                    <label for="link_saber_mais">Link do Banner 'Saber Mais':</label>
                    <input type="text" name="link_saber_mais" value="<?= $d['link_botao']?>">
                </div>
                

                <input type="submit" value="editar">

            <?php endforeach; ?>

            
                
        </form> 

    </div>

</body>
</html>