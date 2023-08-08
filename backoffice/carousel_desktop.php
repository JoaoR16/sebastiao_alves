<?php
require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("header.php");


session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$carousel = selectSQL("SELECT * FROM carousel");

?>

<main>

    <div class="main_box">
        <table>

            <tr>
                <th>IMAGEM</th>
                <th>TITULO</th>
                <th>SUBTITULO</th>
                <th>DATA ATUALIZAÇÃO</th>
                <th>ACÇÔES</th>
            </tr>

            <?php foreach($carousel as $c): ?>
                <tr>
                    <td>
                        <img src="<?= $c["img"]?>" alt=" <?= $c["img"]?>">
                    </td>
                    
                    <td>
                        <?= $c["titulo"]?>
                    </td>
                    <td>
                        <?= substr($c["subtitulo"],0,50)?>...
                    </td>
                    <td>
                        <?= $c["data_atualizacao"] ?>
                    </td>
                    <td>
                        <a href="editar_carousel_desktop.php?id=<?=$c['id']?>">Editar</a>
                        <a href="deletar_carousel.php?id=<?=$c['id']?>">Apagar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        
        </table>
        
        <a href="criar_carousel.php">
            <button class="submit"> CRIAR NOVO BANNER</button> 
        </a>
        

    </div>

</main>