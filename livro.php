<?php
require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");

$liv = true;

$id= $_GET["id"];
$livro = selectSQLUnico("SELECT * FROM livros WHERE id='$id'");

require_once("header.php") 

?>
    
        <!-- MAIN -->

        <main class="container-fluid p-0 container">

            <div class="row caixa-title-box">
                <div class="col-12 title-box livro-title-box">
                    <h5 class="box-title-active">Livros</h5>
                    <h3 class="box-title"><?= $livro["titulo"] ?> </h3>
                </div>
            </div>
            
            <div class="row m-0" id="scroll">

                <div class="col-9 m-auto livros-content">
                    <img src="<?=$livro["img"] ?>" alt=" livro-conteudo-1" class="img-livro">
                    <p class="p">
                        <?=$livro["subtitulo"]  ?>
                    </p>

                    <div class="col-12 d-none d-md-block">
                        <a href="" onclick="voltarAtras()" onmouseover="alterVoltarAtras('voltar_livro')" onmouseleave="alterVoltarAtras('voltar_livro')">
                            <img src="./imgs/voltar1.svg" alt="botaovoltar" class="botao-voltar-livro" id="voltar_livro">
                        </a>
                    </div>
                </div>

            </div>



        </main>

       
    <?php require_once("footer.php") ?>

    <script>fazerScroll()</script>