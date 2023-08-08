    <?php
        require_once("funcoes.php");
        require_once("../Config/config.php");
        require_once("../Config/base_dados.php");

        
        $hom = true;


        $home = selectSQLUnico("SELECT * FROM home");
        $form = isset($_GET["editar"]);
        $form2 = isset($_GET["imagem"]) && isset($_GET["texto"]);

        if($form2){

            iduSQL("UPDATE home SET img='$_GET[imagem]', texto='$_GET[texto]' WHERE id='1'");
        }    



        require_once("header.php")
    ?>

        <?php if(!$form): ?>
            
            <div class="main_box">
            
                <div >
                    <h1>
                        Imagem do autor da Página (HOME):
                    </h1>

                    <img src="<?=$home["img"]?>" alt="">

                </div>

                <hr>

                <div >

                    <h1>Texto do "Últimos Livros" da página (HOME):</h1>

                    <p>
                        <?= $home["texto"] ?>
                    </p>

                </div>

                <hr>

                <a href="home.php?editar=true">
                    <button>Editar HOME</button>
                </a>

            </div>
        <?php elseif($form): ?>

            <div class="main_box">

                <h1>Editar (HOME)</h1>

                <form class="forms">
                    
                    <div class="inner-forms">
                        <label for="imagem">Link da imagem do autor na HOME:</label>
                        
                        <div>
                            <input type="text" name="imagem" value="<?= $home["img"] ?>" class="input-imagem">
                            <a target="_blank" href="../filemanager/tinyfilemanager.php">
                                <button type="button">Gestor de Ficheiros</button>
                            </a>
                        </div>
                    </div>
                    <div class="inner-forms">
                        <label for="texto">Texto do "Últimos Livros" da página (HOME):</label>
                        <textarea maxlength="10" id="teste" name="texto" placeholder="Texto" cols="80" rows="10"><?=$home["texto"] ?></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#teste' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>

                    <input type="submit" value="Editar Home">
                    
                </form>
            </div>
         
       <?php endif; ?>     

    </body>
</html>