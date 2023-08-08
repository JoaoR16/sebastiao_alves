

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BackOffice</title>

        <link rel="stylesheet" href="style.css">

        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

    </head>
    <body>
        
        <header class="title_box main_box">
            <h1>BackOffice</h1>

            <nav>
                <a href="inicio.php" class="<?=($ini)?"nav_active": ""?>" >Inicio</a>
                <a href="carousel.php" class="<?=($carou)?"nav_active": ""?>">Carousel</a>
                <a href="home.php" class="<?=($hom)?"nav_active": ""?>">Home</a>
                <a href="autor.php" class="<?=($aut)?"nav_active": ""?>">Autor</a>
                <a href="livro.php"  class="<?=($liv)?"nav_active": ""?>">Livros</a>
                <a href="destaques.php" class="<?=($dest)?"nav_active": ""?>" >Destaques</a>
                <a href="imprensa.php" class="<?=($imp)?"nav_active": ""?>">Imprensa</a>
                <a href="contactos.php" class="<?=($cont)?"nav_active": ""?>">Contactos</a>
                <a href="redes.php" class="<?=($red)?"nav_active": ""?>">Redes</a>
                <a href="configuracoes.php" class="<?=($conf)?"nav_active": ""?>">Configurações</a>
                <a href="logout.php">Sair</a>
            </nav>

        </header>