<?php
require_once("./Config/config.php");
require_once("./Config/base_dados.php");

$imp = true;

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$imprensa = selectSQL("SELECT * FROM imprensa");

require_once("header.php");
?>

<main>

    <div class="main_box">
        <table>

            <tr>
                <th>IMAGEM</th>
                <th>TITULO</th>
                <th>TEXTO</th>
                <th>DATA PUBLICAÇÃO</th>
                <th>ACÇÔES</th>
            </tr>

            <?php foreach($imprensa as $i): ?>
                <tr>
                    <td>
                        <img src="<?= $i["img"]?>" alt=" <?= $i["img"]?>">
                    </td>
                    
                    <td>
                        <?= $i["titulo"]?>
                    </td>
                    <td>
                        <?=$i["texto"]?>
                    </td>
                    <td>
                        <?= $i["data_publicacao"] ?>
                    </td>
                    <td>
                        <a href="editar_imprensa.php?id=<?=$i['id']?>">Editar</a>
                        <a href="deletar_imprensa.php?id=<?=$i['id']?>">Apagar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        
        </table>
        
        <a href="criar_imprensa.php">
            <button class="submit"> CRIAR NOVA POSTAGEM</button> 
        </a>
        

    </div>

</main>