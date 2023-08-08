<?php 

require_once("./Config/config.php");
require_once("./Config/base_dados.php");
require_once("funcoes.php");

$cont = true;
$contactos = selectSQLUnico("SELECT * FROM contactos");

require_once("header.php") 

?>
    
        <!-- MAIN -->

        <main class="container-fluid p-0">

            <div class="row caixa-title-box">
                <div class="col-12 title-box">
                    <h5 class="box-title-active">Contactos</h5>
                    <h3 class="box-title">pode contactar-me através do e-mail ou telefone</h3>
                </div>
            </div>

            <div class="row contactos-content text-center" id="scroll">
                
                <div class="col-2 text-center outer-info-footer">

                    <h6 class="card-categoria info-subtitulo titulo-contactos">
                        telefone
                    </h6>
                    <p class="p p-footer text-center">
                        <?= $contactos["telefone"] ?>
                    </p>

                </div>
                <div class="col-2 text-center outer-info-footer">

                    <h6 class="card-categoria info-subtitulo titulo-contactos">
                        Morada
                    </h6>
                    <p class="p p-footer text-center">
                        <?= $contactos["morada"] ?>.
                    </p>

                </div>
                <div class="col-2  text-center outer-info-footer">

                    <h6 class="card-categoria info-subtitulo titulo-contactos">
                        Email
                    </h6>
                    <p class="p p-footer text-center">
                        <?= $contactos["email"] ?>
                    </p>

                </div>
                
                <div class="col-12">

                    <hr class="linha-separadora-contactos">

                </div>

                <div class="col-4 horario text-center outer-info-footer">

                    <h6 class="card-categoria info-subtitulo titulo-contactos">
                        Horário
                    </h6>
                    <p class="p p-footer text-center">
                        <?= $contactos["horario"] ?>
                    </p>

                </div>

            </div>




        </main>

<?php require_once("footer.php") ?>

<script>fazerScroll()</script>