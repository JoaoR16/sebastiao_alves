<?php
require_once("./Config/config.php");
require_once("./Config/base_dados.php");

$dest = true;

session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$destaques = selectSQL("SELECT * FROM destaques");
require_once("header.php");
?>

<main>

    <div class="main_box">
        <table>

            <tr>
                <th>IMAGEM</th>
                <th>TITULO</th>
                <th>OBSERVAÇÃO</th>
                <th>ACÇÔES</th>
            </tr>

            <?php foreach($destaques as $d): ?>
                <tr>
                    <td>
                        <img src="<?= $d["img"]?>" alt=" <?= $d["img"]?>">
                    </td>
                    
                    <td>
                        <?= $d["titulo"]?>
                    </td>
                    <td>
                        <?= $d["obs"]?>
                    </td>
                    <td>
                        <a href="editar_destaque.php?id=<?=$d['id']?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        
        </table>
        
        <a href="criar_destaque.php">
            <button class="submit"> CRIAR NOVO DESTAQUE</button> 
        </a>
        

    </div>
</main>