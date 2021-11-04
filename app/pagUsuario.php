<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>FORMA DE PAGAMENTO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">

        
    </head>
    <body>

      <h1>ENTROU CARALEOOOOO      pag usuario   </h1>

      <?php
      echo "<h1>BEM VINDO <u>$logado</u></h1>";
      ?>

        <div class="d-flex">
            <a href="../prog/sair.php" class="btn btn-danger">SAIR</a>
        </div>  


        

    </body>
</html>