<?php
        require_once("funcoes.php");
        require_once("../Config/config.php");
        require_once("../Config/base_dados.php");

        $red = true;

        session_start();
        if(empty($_SESSION["utilizador"])){
            header("Location: index.php");  
            exit();  
        }



        $redes = selectSQLUnico("SELECT * FROM redes");
        $form = isset($_GET["editar"]);
        $form2 = isset($_GET["insta"]) && isset($_GET["face"]) && isset($_GET["linkedin"]) ;

        if($form2){

            iduSQL("UPDATE redes SET face='$_GET[face]', insta='$_GET[insta]', linkedin='$_GET[linkedin]' WHERE id='1'");
        }    



        require_once("header.php")
    ?>

        <?php if(!$form): ?>
            
            <div class="main_box">
            
                <div>
                    <h1>
                        Instagram:
                    </h1>

                    <p>
                        <?=$redes["insta"]?>
                    </p>

                </div>

                <hr>

                <div >

                    <h1>Facebook:</h1>

                    <p>
                        <?= $redes["face"] ?>
                    </p>

                </div>

                <hr>

                <div >

                    <h1>Linkedin:</h1>

                    <p>
                        <?= $redes["linkedin"] ?>
                    </p>

                </div>

                <a href="redes.php?editar=true">
                    <button>Editar redes</button>
                </a>

            </div>
        <?php elseif($form): ?>

            <div class="main_box">

                <h1>Editar (REDES)</h1>

                <form class="forms">
                    
                    <div class="inner-forms">
                        <label for="insta">Instagram:</label>
                        <input type="text" name="insta" value="
                        <?=$redes["insta"]?>">
                    </div>

                    <div class="inner-forms">
                        <label for="face">Facebook:</label>
                        <input type="text" name="face" value="
                        <?=$redes["face"]?>">
                    </div>

                    <div class="inner-forms">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" name="linkedin" value="
                        <?=$redes["linkedin"]?>">
                    </div>

                    <input type="submit" value="Editar REDES">
                    
                </form>
            </div>
         
       <?php endif; ?>     

    </body>
</html>