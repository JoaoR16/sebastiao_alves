<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$form2 = isset($_GET["link_imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data"]);


if($form2){

    iduSQL("INSERT INTO imprensa (img, titulo, texto,data_publicacao) VALUES ('$_GET[link_imagem]', '$_GET[titulo]', '$_GET[texto]','$_GET[data]') ");


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
</head>
<body>

    <div class="main_box">

        <h1>Editar</h1>

        <form class="forms">


                <div class="inner-forms">
                    <label for="link_imagem">Link da imagem da Postagem:</label>
                    
                    <div>

                        <input type="text" name="link_imagem"  class="input-imagem">

                        <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                        </a>

                    </div>
                    
                </div>


                
                <div class="inner-forms">
                    <label for="titulo">Titulo da postagem:</label>
                    <input type="text" name="titulo">
                </div>
                
                <div class="inner-forms">
                    <label for="texto">texto do postagem:</label>
                    <textarea id="teste" name="texto" placeholder="Texto" cols="80" rows="10"></textarea>
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
                    <input type="text" name="data">
                </div>
                
            
                <input type="submit" value="Criar">


            
                
        </form> 

    </div>

</body>
</html>