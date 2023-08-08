<?php

require_once("./Config/config.php");
require_once("./Config/base_dados.php");

$isLogin = isset($_GET["log"]) ;


// log: sebastiao pass: 1234
// log: joaor pass:456

// $senha_cif = password_hash(456, PASSWORD_DEFAULT);
// iduSQL("INSERT INTO utilizador(login, pass) VALUES ('joaor', '$senha_cif')");


?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BackOffice</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="main_box">
            <h1>Bem vindo ao BackOffice!</h1>
        </div>

        <div class="form_box main_box">
            <h2>Login:</h2>
            
            <?php if($isLogin): ?>
                <h3 class="login_error">Login inválido,tente novamente</h3>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <input type="text" name="login" placeholder="Nome" required="requerid">
                <input type="password" name="pass" placeholder="Senha">
                <input class="submit" type="submit" value="Entrar!">
            </form>
        </div>

    </body>
</html>