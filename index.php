<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Barbearia CRUD</title>

    <!-- Required -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div id='principal'>
        <h1 class='titulo'>Agenda Barbearia</h1> 
        <?php
            if (isset($_GET['pg'])){
                if(file_exists($_GET['pg'].'.php')){
                    include $_GET['pg'].'.php';
                }else{
                    include "404.php";
                }
            }
            
        ?>
        <button class='button' onclick='print()' type="submit">
            <?php 
                $link = "";
                if(isset($_GET['pg'])){
                   $pag = $_GET['pg']; 
                   if($pag == "usuario"){
                       $link = "index.php?pg=calendario";
                   }
                }else{
                    $link = "index.php?pg=usuario";
                }
            ?>

            <a href="<?php echo $link ?>">>>></a>
            
        </button>
    </div>
</body>
</html>