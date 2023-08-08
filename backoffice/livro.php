<?php
require_once("./Config/config.php");
require_once("./Config/base_dados.php");

$liv = true;


session_start();
if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}

$livros = selectSQL("SELECT * FROM livros");


require_once("header.php");
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

            <?php foreach($livros as $l): ?>
                <tr>
                    <td>
                        <img src="<?= $l["img"]?>" alt=" <?= $l["img"]?>">
                    </td>
                    
                    <td>
                        <?= $l["titulo"]?>
                    </td>
                    <td>
                        <?= substr($l["subtitulo"],0,50)?>...
                    </td>
                    <td>
                        <?= $l["data_atualizacao"] ?>
                    </td>
                    <td>
                        <a href="editar_livro.php?id=<?=$l['id']?>">Editar</a>
                        <a href="deletar_livro.php?id=<?=$l['id']?>">Apagar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        
        </table>
        
        <a href="criar_livro.php">
            <button class="submit"> CRIAR NOVO LIVRO</button> 
        </a>
        

    </div>

</main>