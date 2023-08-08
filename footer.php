<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");


$contactos = selectSQLUnico("SELECT * FROM contactos");
$redes = selectSQLUnico("SELECT * FROM redes");

?>
   
   <!-- Footer -->


   <footer class="container-fluid">

<div class="row">

    <div class="col">

        <hr class="linha">

        <nav class="navbar navbar-expand-lg p-0 nav-footer">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex navbar-footer " >
                        <li class="nav-item">
                            <a class="nav-link nav-item-footer <?=($hom)?"nav-active": ""?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav-item-footer <?=($aut)?"nav-active": ""?>" href="autor.php">autor</a>
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link nav-item-footer <?=($liv)?"nav-active": ""?>" onclick="esperar()" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                livros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-item-footer <?=($imp)?"nav-active": ""?>" href="imprensa.php">Imprensa</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav-item-footer <?=($cont)?"nav-active": ""?>" href="contactos.php">contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <hr class="d-none d-lg-block linha">



    </div>

</div>

<div class="row footer-completo">

    <div class="col-5 footer-left-box footer-left-box-contactos" >

        <h1 class="t1 contactos">
            Contactos
        </h1>

        <div class="info">
            <div>
                <h6 class="card-categoria info-subtitulo">
                    Morada
                </h6>
                <p class="p p-footer">
                   <?= $contactos["morada"] ?>
                </p>
            </div>  

            <div>
                <h6 class="card-categoria info-subtitulo">
                    telefone
                </h6>
                <p class="p p-footer">
                    <?= $contactos["telefone"] ?>
                </p>
            </div>

            <div class="email">
                <h6 class="card-categoria info-subtitulo">
                    Email
                </h6>
                <p class="p p-footer">
                    <?= $contactos["email"] ?>
                </p>
            </div>
        </div>

    </div>

    <div class="col-5 footer-right-box">

        <div class="titulo-redes-sociais">
            <h1 class="t1 redes-sociais text-center ">
                Siga-me nas redes sociais
            </h1>
        </div>
        
        <div class="footer-redes-sociais">
            <a href="<?= $redes["insta"]?>">
                <img src="./imgs/instagram1.svg" alt="instagram1" id="insta" onmouseover="alterInsta('insta')" onmouseleave="alterInsta('insta')">
            </a>
            <a href="<?= $redes["face"]?>">
                <img src="./imgs/facebook1.svg" alt="facebook1" id="face" onmouseover="alterFacebook('face')" onmouseleave="alterFacebook('face')">
            </a>
            <a href=" <?= $redes["linkedin"]?>">
            <img src="./imgs/linkedin1.svg" alt="linkedin1" id="linkedin" onmouseover="alterLinkedin('linkedin')" onmouseleave="alterLinkedin('linkedin')">
            </a>
            
            

        </div>
    </div>

    <div class="col-5 footer-imgs">
        <img src="imgs/livroreclamacoes.svg" alt="livroreclamacoes">
        <img src="imgs/ralc.svg" alt="ralc">
    </div>

    <div class="col-5 copyright">
        <p class="p p-footer text-copy text-center ">
            Politica de cookies.
            <br>
            Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
        </p>
    </div>

</div>



</footer>


</body>



</html>