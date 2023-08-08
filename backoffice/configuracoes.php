<?php
        require_once("funcoes.php");
        require_once("../Config/config.php");
        require_once("../Config/base_dados.php");

        $conf = true;

        session_start();
        if(empty($_SESSION["utilizador"])){
            header("Location: index.php");  
            exit();  
        }


        $form = isset($_GET["senha_atual"]) && isset($_GET["nova_senha"]) && isset($_GET["nova_senha2"]);
       
        if($form){

            if(password_verify("$_GET[senha_atual]",$_SESSION["utilizador"]["pass"])){
                
                if($_GET["nova_senha"] == $_GET["nova_senha2"]){
                     
                    $senha_cif = password_hash($_GET["nova_senha"], PASSWORD_DEFAULT);

                    $id = $_SESSION["utilizador"]["id"]; 
                    
                    iduSQL("UPDATE utilizador SET pass='$senha_cif' WHERE id='$id'");
                }


            }
            
        
        }    



        require_once("header.php")
    ?>


            <div class="main_box">

                <h1>Editar SENHA</h1>

                <form class="forms">
            
                    <input type="text" name="senha_atual" placeholder="Senha Atual">
                    <input type="text" name="nova_senha" placeholder="Nova Senha">
                    <input type="text" name="nova_senha2" placeholder="Digite Novamente a senha ">
               
                    <input type="submit" value="Editar CONTACTOS">
                    
                </form>
            </div>
         
   

    </body>
</html>