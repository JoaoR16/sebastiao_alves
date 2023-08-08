<?php
    $carou = true;

    session_start();
    if(empty($_SESSION["utilizador"])){
        header("Location: index.php");  
        exit();  
    }

    require_once("header.php")
?>

        <div class="main_box">
            <div class="box-carousel-buttons">
                
                <a href="carousel_desktop.php">
                    <button>
                        Desktop
                    </button>
                </a>
                
                <a href="carousel_mobile.php">
                    <button>
                        Mobile
                    </button>
                </a>
                
            </div>
                

            
            
            


        </div>


    </body>
</html>