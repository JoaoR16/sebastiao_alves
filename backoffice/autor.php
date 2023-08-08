<?php
        require_once("funcoes.php");
        require_once("../Config/config.php");
        require_once("../Config/base_dados.php");

        $aut = true;

        session_start();
        if(empty($_SESSION["utilizador"])){
            header("Location: index.php");  
            exit();  
        }



        $autor = selectSQLUnico("SELECT * FROM autor");
        $form = isset($_GET["editar"]);
        $form2 = isset($_GET["imagem"]) && isset($_GET["texto"]);

        if($form2){

            iduSQL("UPDATE autor SET img='$_GET[imagem]', texto='$_GET[texto]' WHERE id='1'");
        }    



        require_once("header.php")
    ?>

        <?php if(!$form): ?>
            
            <div class="main_box">
            
                <div >
                    <h1>
                        Imagem do autor da Página (AUTOR):
                    </h1>

                    <img src="<?=$autor["img"]?>" alt="">

                </div>

                <hr>

                <div >

                    <h1>Texto da página (AUTOR):</h1>

                    <p>
                        <?= $autor["texto"] ?>
                    </p>

                </div>

                <hr>

                <a href="autor.php?editar=true">
                    <button>Editar AUTOR</button>
                </a>

            </div>
        <?php elseif($form): ?>

            <div class="main_box">

                <h1>Editar (Autor)</h1>

                <form class="forms">
                    
                    <div class="inner-forms">
                        <label for="imagem">Link da imagem do autor no AUTOR:</label>
                        
                        <div>
                            <input type="text" name="imagem" value="<?= $autor["img"] ?>" class="input-imagem">
                            <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                            </a>
                        </div>
                    </div>
                    <div class="inner-forms">
                        <label for="texto">Texto da página (AUTOR):</label>
                        <textarea maxlength="10" id="teste" name="texto" placeholder="Texto" cols="80" rows="10"><?=$autor["texto"] ?></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#teste' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>

                    <input type="submit" value="Editar AUTOR">
                    
                </form>
            </div>
         
       <?php endif; ?>     

    </body>
</html>