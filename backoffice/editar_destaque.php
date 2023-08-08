<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form = isset($_GET["id"]);
$form2 = isset($_GET["id"]) && isset($_GET["livro"]) && isset($_GET["obs"]);

if(!$form){
    header("Location: index.php");  
    exit();  
}
else{
    $id=$_GET["id"];

    $destaques = selectSQL("SELECT * FROM destaques WHERE id='$id'");
    $livros = selectSQL("SELECT * FROM livros");
}

if($form2){
    $livro_escolhido = selectSQLUnico("SELECT * FROM livros WHERE id='$_GET[livro]'");
    
    
    iduSQL("UPDATE destaques SET img='$livro_escolhido[img]', titulo='$livro_escolhido[titulo]', obs='$_GET[obs]', texto='$livro_escolhido[subtitulo]' WHERE id='$_GET[id]'");

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

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

</head>
<body>

    <div class="main_box">

        <h1>Editar</h1>

        <form class="forms">

            <?php foreach($destaques as $d): ?>

                <input type="hidden" name="id" value="<?=$id?>" > 

                    <?php foreach($livros as $l): ?>

                        <div class="inner-forms">
                            <input type="radio" id="<?=$l["id"]?>" name="livro" value="<?=$l["id"]?>">
                            <label for="<?=$l["id"]?>"><?= $l["titulo"]?></label>
                        </div>

                    <?php endforeach; ?>    
                
                <div class="inner-forms">
                    <label for="titulo">Observação do Destaque:</label>
                    <input type="text" name="obs" value="<?=$d['obs']?>">
                </div>
                
                <input type="submit" value="editar">

            <?php endforeach; ?>

            
                
        </form> 

    </div>

</body>
</html>