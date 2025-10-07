<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>place holder</title>
</head>
<body>
    <?php
        //verificação de login
        if ( ($_POST) && ( !isset($_SESSION['usuario']) ) ) {
          //validação do usuário
          
        } else if ( !isset($_SESSION["usuario"] ) ) {
            //mostrar tela de login

        } else if ( isset($_SESSION["usuario"]) ) {
            //mostrar tela principal
            
        } else {
            echo "<p>Requisição inválida</p>";
        }
    ?>
    
</body>
</html>


