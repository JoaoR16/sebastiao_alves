<?php
   
    require_once("funcoes.php");
    require_once("../Config/config.php");
    require_once("../Config/base_dados.php");
   
    session_start();
    if(empty($_SESSION["utilizador"])){
        header("Location: index.php");  
        exit();  
    }



    $form = isset($_GET["id"]);
    $form2 = isset($_GET["id"]) && isset($_GET["deletar"]);

    if($form2){
        $isDelete = $_GET["deletar"];

        if($isDelete){
            iduSQL("DELETE  FROM carousel WHERE id='$_GET[id]'");
        iduSQL("DELETE  FROM carousel_mobile WHERE id_carousel='$_GET[id]'");

        header("Location: carousel.php");
        exit();
        }
        
        
    }

    if($form){
        $id = $_GET["id"];
        $carousel = selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");
    }
    

?>

<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Backoffice</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="main_box">
            <h1>Apagar este banner: (<?= $carousel["titulo"]?>)?</h1>

            <img src="<?= $carousel["img"] ?>" alt=" <?= $carousel["titulo"]?>">



            <a href="deletar_carousel.php?deletar=true&id=<?=$id?>">
                <button>Deletar</button>
            </a>

            <a href="carousel.php">
                <button>Cancelar</button>
            </a>

        </div>

    </body>
</html>