<?php
require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");


$carousel = selectSQL("SELECT * FROM carousel");
$livros = selectSQL("SELECT * FROM livros");

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sebastião Alves</title>

        <!--JQUERRY -->
        <script
        src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

        <!-- CSS-->
        <link rel="stylesheet" href="style.css">

        <script src="main.js"></script>

    </head>
    <body class="container">

        
        
        <header class="container-fluid header">
            <div class="row outer-title-box">
                <div class="col-11 m-0 outer-title-header">
                    <h1 class="titulo">Sebastião Alves</h1>
                    <hr class="linha">
                </div>
            </div>
               
                <div class="row teste">
                    <div class="col-12 p-0">
                          <nav class="navbar navbar-expand-lg bg-body-tertiary m-auto">
                            <div class="container-fluid p-0">
                              <a class="navbar-brand brand d-none" href="#">Sebastião alves</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu">
                                    <img src="./imgs/menu.svg" alt="Menu">
                                </span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-2">
                                  <li class="nav-item">
                                    <a class="nav-link <?=($hom)?"nav-active": ""?>" aria-current="page" href="index.php">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link <?=($aut)?"nav-active": ""?>" href="autor.php">Autor</a>
                                  </li>
                                    <li class="nav-item dropdown">
                                        <a id="livros" class="nav-link <?=($liv)?"nav-active": ""?> " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            livros
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php foreach($livros as $l) :?>
                                                <li>
                                                    <a class="dropdown-item" href="livro.php?id=<?=$l["id"] ?>">
                                                        <?= $l["titulo"] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach ?>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?=($imp)?"nav-active": ""?>" href="imprensa.php">Imprensa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?=($cont)?"nav-active": ""?>" href="contactos.php">contactos</a>
                                    </li>
                                </ul>
                              </div>
                            </div>
                          </nav>
    
    
    
                        <!-- carousel-->
                        <div class="d-flex justify-content-center">

                            <div id="carouselExampleCaptions" class="carousel slide z-0 h-100">
                                <div class="carousel-indicators">

                                    <?php for($i=0;$i<count($carousel); $i++): ?>

                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" class="carousel-button <?= ($i==0)? "active": "" ?>" id="<?= ($i==0)? " active-indicator" : ""?>" aria-current="<?= ($i==0)?"true": ""?>" aria-label="Slide <?= ($i+1) ?>"></button>
                                        
                                    <?php endfor; ?>
                                </div>
                                <div class="carousel-inner h-100">
                                    
                                
                                    <?php for($i=0;$i<count($carousel); $i++): ?>

                                        <?php $mobile = getMobileID($carousel[$i]["id"]); ?>

                                        <div class="carousel-item <?= ($i==0)? "active": ""?>">
                                            <img src="<?= $mobile["img"] ?>" class="d-lg-none w-100 img-carousel-mobile" alt="<?= $mobile["img"] ?>">
                                            <img src="<?= $carousel[$i]["img"] ?>" class="d-none d-lg-block w-100 " alt="<?=$carousel[$i]["img"]?>">
                                            <div class="carousel-caption d-md-block">
                                                <div class="caixa-carousel w-75 text-start">
                                                    
                                                    <?php if($i==0): ?>
                                                        <div class="subtitulo-banner">
                                                            <h1> novidade </h1>
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="titulo-banner w-75 m-0">    
                                                        <h2> <?= $carousel[$i]["titulo"]?></h2> 
                                                    </div>
                                                    <div class="texto-banner"> 
                                                        <h6> 
                                                            <?= $carousel[$i]["subtitulo"] ?>
                                                        </h6>
                                                    </div>
                                                    <a href="<?= $carousel[$i]["link_botao"] ?>">
                                                        <img src="./imgs/sabermais1.svg" alt="botaosabermais" class="button-saber-mais" id="butao_banner<?=$i?>" onmouseover="alterSaberMais('butao_banner<?=$i?>')" onmouseleave="alterSaberMais('butao_banner<?=$i?>')">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <?php endfor; ?> 


                                </div>
                            </div>

                        </div>
                        
                        <!-- ending carousel-->
    
                    </div>
                </div>

        </header>