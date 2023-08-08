<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form = isset($_GET["id"]);
$form2 = isset($_GET["id"]) && isset($_GET["link_imagem"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]);

if(!$form){
    header("Location: index.php");  
    exit();  
}
else{
    $id=$_GET["id"];
    $livros = selectSQL("SELECT * FROM livros WHERE id='$id'");
}

if($form2){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("UPDATE livros SET img='$_GET[link_imagem]', titulo='$_GET[titulo]', subtitulo='$_GET[subtitulo]',data_atualizacao='$data_atual'  WHERE id='$_GET[id]'");

    header("Location: livro.php");  
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

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

</head>
<body>

    <div class="main_box">

        <h1>Editar</h1>

        <form class="forms">

            <?php foreach($livros as $l): ?>

                <input type="hidden" name="id" value="<?=$id?>" > 

                <div class="inner-forms">
                    <label for="link_imagem">Link da imagem do LIVRO:</label>
                    
                    <div>

                        <input type="text" name="link_imagem" value="<?= $l['img']?>" class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    

                </div>
                
                <div class="inner-forms">
                    <label for="titulo">Titulo do LIVRO:</label>
                    <input type="text" name="titulo" value="<?=$l['titulo']?>">
                </div>
                
                <div class="inner-forms">
                    <label for="subtitulo">Texto do LIVRO:</label>
                    <textarea maxlength="10" id="teste" name="subtitulo" placeholder="Texto" cols="80" rows="10"><?=$l["subtitulo"] ?></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#teste' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                </div>
                

                <input type="submit" value="editar">

            <?php endforeach; ?>

            
                
        </form> 

    </div>

</body>
</html>