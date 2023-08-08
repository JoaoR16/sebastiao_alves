<?php

require_once("funcoes.php");
session_start();

$ini = true;

if(empty($_SESSION["utilizador"])){
    header("Location: index.php");  
    exit();  
}


$nome = $_SESSION["utilizador"]["login"];
$acessos = getUltimoAcesso($_SESSION["utilizador"]["id"]);

?>
<?php
require_once("header.php")
?>

        <div class="main_box">

            <h1>
                Bem vindo <?= $nome ?>.
                <br>
                Seu último acesso foi em: <?= $acessos ?>
            </h1>

        </div>
    </body>
</html>