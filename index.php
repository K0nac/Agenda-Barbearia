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
    <!-- Div padrão onde recebe as outra paginas  -->
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
        
        <!-- Verficação da pagina em questão 
        para que o botão possa avançar para pagina seguinte-->
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

            <!-- Um simples botao 
            que recebe no href um novo link toda vez que é clicado
            a partir da verificaçao a cima -->
        <a href="<?php echo $link ?>">
            <button class='button' onclick='print()' type="submit">
                >>>
            </button>
        </a>
            
        
    </div>
</body>
</html>