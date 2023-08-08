<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form = isset($_GET["id"]);
$form2 = isset($_GET["id"]) && isset($_GET["link_imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data"]);

if(!$form){
    header("Location: index.php");  
    exit();  
}
else{
    $id=$_GET["id"];
    $imprensa = selectSQL("SELECT * FROM imprensa WHERE id='$id'");
}

if($form2){

    iduSQL("UPDATE imprensa SET img='$_GET[link_imagem]', titulo='$_GET[titulo]', texto='$_GET[texto]',data_publicacao='$_GET[data]'  WHERE id='$_GET[id]'");

    header("Location: imprensa.php");  
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

            <?php foreach($imprensa as $i): ?>

                <input type="hidden" name="id" value="<?=$id?>" > 

                <div class="inner-forms">
                    <label for="link_imagem">Link da imagem da postagem:</label>
                    
                    <div>

                        <input type="text" name="link_imagem" value="<?= $i['img']?>" class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    

                </div>
                
                <div class="inner-forms">
                    <label for="titulo">Titulo da postagem:</label>
                    <input type="text" name="titulo" value="<?=$i['titulo']?>">
                </div>
                
                <div class="inner-forms">
                    <label for="texto">Texto da postagem</label>
                    <textarea  id="teste" name="texto" placeholder="Texto" cols="80" rows="10"><?=$i["texto"] ?></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#teste' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                </div>

                <div class="inner-forms">
                    <label for="data">Data da publicação:</label>
                    <input type="text" name="data" value="<?=$i['data_publicacao']?>" >
                </div>
                

                <input type="submit" value="editar">

            <?php endforeach; ?>

            
                
        </form> 

    </div>

</body>
</html>
