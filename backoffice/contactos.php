<?php
        require_once("funcoes.php");
        require_once("../Config/config.php");
        require_once("../Config/base_dados.php");

        $cont = true;

        session_start();
        if(empty($_SESSION["utilizador"])){
            header("Location: index.php");  
            exit();  
        }   



        $contactos = selectSQLUnico("SELECT * FROM contactos");
        $form = isset($_GET["editar"]);
        $form2 = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["horario"]) && isset($_GET["email"]) ;

        if($form2){

            iduSQL("UPDATE contactos SET telefone='$_GET[telefone]', morada='$_GET[morada]', horario='$_GET[horario]', email='$_GET[email]' WHERE id='1'");
        }    



        require_once("header.php")
    ?>

        <?php if(!$form): ?>
            
            <div class="main_box">
            
                <div>
                    <h1>
                        Telefone:
                    </h1>

                    <p>
                        <?=$contactos["telefone"]?>
                    </p>

                </div>

                <hr>

                <div >

                    <h1>Morada:</h1>

                    <p>
                        <?= $contactos["morada"] ?>
                    </p>

                </div>

                <hr>

                <div >

                    <h1>E-mail:</h1>

                    <p>
                        <?= $contactos["email"] ?>
                    </p>

                </div>
                
                <hr>

                <div >

                    <h1>Horário</h1>

                    <p>
                        <?= $contactos["horario"] ?>
                    </p>

                </div>


                <a href="contactos.php?editar=true">
                    <button>Editar contactos</button>
                </a>

            </div>
        <?php elseif($form): ?>

            <div class="main_box">

                <h1>Editar (Contactos)</h1>

                <form class="forms">
                    
                    <div class="inner-forms">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" value="
                        <?=$contactos["telefone"]?>">
                    </div>

                    <div class="inner-forms">
                        <label for="morada">Morada:</label>
                        <input type="text" name="morada" value="
                        <?=$contactos["morada"]?>">
                    </div>

                    <div class="inner-forms">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" value="
                        <?=$contactos["email"]?>">
                    </div>

                    <div class="inner-forms">
                        <label for="horario">Horário:</label>
                        <input type="text" name="horario" value="
                        <?=$contactos["horario"]?>">
                    </div>

                    <input type="submit" value="Editar CONTACTOS">
                    
                </form>
            </div>
         
       <?php endif; ?>     

    </body>
</html>