<?php 
require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");

$hom = true;

$home = selectSQLUnico("SELECT * FROM home");
$autor = selectSQLUnico("SELECT texto FROM autor");
$destaques = selectSQL("SELECT * FROM destaques");

$texto = substr("$autor[texto]",0,1000);

require_once("header.php")
?>
        <main class="container-fluid main-index">

            
            <!-- About Me Box-->
            <div class="row outer-about-me-box ">
                <div class="col-12 about-me-box">
                    <div class="about-me-box-img">
                        <img src="<?= $home["img"] ?>" alt="foto-sebastiao" >
                    </div>
                    <div class="about-me-box-content">
                        <h1>Bem-vindo ao meu Website</h1>
                        <p> 
                            <?= $texto ?>...
                        </p>    
                        <div class="button-saber-mais-about-me">
                            <a href="autor.php" class="about-me-box-link">
                                <img src="./imgs/sabermais1.svg" alt="botao-saber-mais" id="butao_para_autor" onmouseover="alterSaberMais('butao_para_autor')" onmouseleave="alterSaberMais('butao_para_autor')">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Ultimos livros-->

                <div class="row">

                    <div class="col-12 ultimos">
                        <h1 class="t1">últimos Livros</h1>
                        <p class="p">
                            <?= $home["texto"] ?>
                        </p>
                    </div>

                </div>

                <!-- CARDS -->
                <div class="row destaques">


                    <?php foreach($destaques as $d): ?>
                        <div class="col-3 card p-0" style="width: 20rem;">
                            <img src="<?= $d["img"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title t2">
                                    <?= $d["titulo"] ?>
                                </h5>
                                <h6 class="card-categoria">
                                    <?= $d["obs"] ?>
                                </h6>
                                <p class="card-text p">
                                    <?= substr($d["texto"],0,250) ?>...
                                </p>
                                <a href="livro.php?id=<?=$d["id"]?>" class="card-button">
                                    <img src="./imgs/sabermais1.svg" alt="botao-saber-mais" class="button-saber-mais butao-destaques" id="butao-destaque<?=$d["id"]?>" onmouseover="alterSaberMais('butao-destaque<?=$d['id']?>')" onmouseleave="alterSaberMais('butao-destaque<?=$d['id']?>')">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    

                </div>


        </main>
<?php require_once("footer.php") ?>