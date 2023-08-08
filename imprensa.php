<?php 
require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");

$imp = true;

$pagina_atual = (isset($_GET["pagina_atual"])) ? $_GET["pagina_atual"] : 1 ;
$total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM imprensa")["total"];

if($pagina_atual<=0){
    $pagina_atual = 1;
}
elseif($pagina_atual > $total_elementos){
    $pagina_atual = 1;
}


$elementos_por_pagina = 2;
$total_paginas = ceil($total_elementos/$elementos_por_pagina);
$total_a_saltar = ($pagina_atual - 1) * $elementos_por_pagina;

$imprensa = selectSQL("SELECT * FROM imprensa ORDER BY 'DESC' LIMIT $elementos_por_pagina OFFSET $total_a_saltar ");

require_once("header.php") 


?>
    
        <!-- MAIN -->

        <main class="container-fluid p-0">

            <div class="row caixa-title-box">
                <div class="col-12 title-box">
                    <h5 class="box-title-active">Imprensa</h5>
                    <h3 class="box-title">últimas noticias</h3>
                </div>
            </div>

                <?php for($i=0;$i<$total_elementos;$i++): ?>
                    <?php if($i==0): ?>
                        <div class="row caixa-imprensa" id="scroll">
                            <div class="info-imprensa">
                                <div class="col-9 t1-imprensa m-auto">
                                    <?=$imprensa[$i]["titulo"] ?>
                                </div>
                                <hr class="linha-separadora col-9 m-auto ">
                                <div class="col-9 m-auto data">
                                    <p>
                                        <?=$imprensa[$i]["data_publicacao"] ?>
                                    </p>
                                </div>
                                <div class="col-9 m-auto outer-img-imprensa">
                                    <img src="<?=$imprensa[$i]["img"] ?>" alt="conteudo-imprensa1" class="imgs-imprensa">
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="row caixa-imprensa2">
                            <div class="info-imprensa">
                                <div class="col-9 t1-imprensa m-auto">
                                    <?=$imprensa[$i]["titulo"] ?>
                                </div>
                                <hr class="linha-separadora col-9 m-auto ">
                                <div class="col-9 m-auto data">
                                    <p>
                                        <?=$imprensa[$i]["data_publicacao"] ?>
                                    </p>
                                </div>
                                <div class="col-9 m-auto outer-img-imprensa">
                                    <img src="<?=$imprensa[$i]["img"] ?>" alt="conteudo-imprensa1" class="imgs-imprensa">
                                </div>
                            </div>
                            <div class="texto-noticia col-9 m-auto">
                                <div class="p">
                                     <?=$imprensa[$i]["texto"] ?>
                                </div>
                            </div>
                        <?php endif;?>
                    <?php endfor; ?>

                <form class="col-5 paginacao m-auto t1">
                    <img src="./imgs/setaesquerda1.svg" alt="setaesquerda1" class="me-4" id="seta_esq" onmouseover="alterSetaEsq('seta_esq')" onmouseleave="alterSetaEsq('seta_esq')">
                    
                    <?php for($i=1; $i <= $total_paginas; $i++): ?>

                        <button class="paginacao-buttom <?= ($i == $pagina_atual) ? "nav-active" : ""; ?>" name="pagina_atual" value="<?= $i; ?>"><?= $i; ?></button>

                    <?php endfor; ?>

                    <img src="./imgs/setadireita1.svg" alt="setadireita1" class="ms-4" id="seta_drt" onmouseover="alterSetaDrt('seta_drt')" onmouseleave="alterSetaDrt('seta_drt')">
                </form>
            </div>
    </main>

   
   <?php require_once("footer.php") ?>
   <script>fazerScroll()</script>
