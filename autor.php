<?php 
require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");

$aut = true;
$autor = selectSQLUnico("SELECT * FROM autor");

require_once("header.php") 

?>
        <!-- MAIN -->

        <main class="container-fluid p-0 m-0 container">
            
            <div class="row caixa-title-box">
                <div class="col-12 title-box">
                    <h5 class="box-title-active">Autor</h5>
                    <h3 class="box-title">Sobre mim</h3>
                </div>
            </div>
            

            <div class="row w-100" id="scroll">

                <div class="col-12 text-center p-0">
                    <img src="<?= $autor["img"] ?>" alt="conteudo" class="imagem-conteudo ">
                </div>
            </div>
            <div class="row w-100">
                <div class="col-10 texto-sobre-autor m-auto">
                    <p class="p">
                        <?= $autor["texto"] ?>
                    </p>
                </div>

                <div class="col-12 outer-botao-voltar">
                    <a href="#" class="d-none botaovermais">
                        <img src="imgs/vermais.svg" alt="botaovermais" class="botao-voltar">
                    </a>
                    <a onclick="voltarAtras()" onmouseover="alterVoltarAtras('voltar_home')" onmouseleave="alterVoltarAtras('voltar_home')">
                        <img src="./imgs/voltar1.svg" alt="botaovoltar" class="botao-voltar" id="voltar_home">
                    </a>
                </div>

            </div>

        </main>

        
<?php require_once("footer.php") ?>

<script>fazerScroll()</script>