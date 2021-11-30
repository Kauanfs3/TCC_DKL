<?php
    include_once '../prog/conexaocad.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet">
        <link href="../css/teste.css" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons" ></script>

    </head>


    <body>

    

    <div class="resp">

    </div>

<div class="questionario">

<div class="form-inner">
        <form action="../prog/processar.php" id="formulario" method="post" enctype="multipart/form-data" name="formulario">
            
    


       
            

            <fieldset>

            <?php
                session_start();
                
                if(isset($_SESSION["flash"])){

                    $message = $_SESSION['flash'];
                    unset($_SESSION['flash']);
                    echo $message;
                }
        ?>
            

                <div class="caixa">
                    <label class="ti">Nome completo </label><span class="obg">*</span>
                    <input class="box" type="text" name="nome" id="nome" required>
                </div>

                <div class="caixa">
                    <label class="ti">E-mail </label><span class="obg">*</span>
                    <input class="box" type="email" name="email" id="email" required>
                </div>

                <div class="caixa">
                    <label class="ti">Senha </label><span class="obg">*</span>
                    <input class="box" type="password" name="senha" id="senha" required>
                </div>

                <div class="caixa">
                    <label class="ti">Telefone </label><span class="obg">*</span>
                    <input class="box" type="tel" id="telefone" name="telefone" required>
                </div>

                <div class="caixa">
                    <label class="ti">Data de nascimento </label><span class="obg">*</span>
                    <input class="box" type="date" name="data_nasc" id="data_nascimento" required>
                </div>

                <input type="button" name="next1" class=" enviar next acao" value="Proximo" >
            </fieldset>

            <fieldset>
                <div class="caixa">
                    <label class="ti">Cidade </label><span class="obg">*</span>
                    <input class="box" type="text" name="cidade" id="cidade" required>
                </div>

                <div class="caixa">
                    <label class="ti">Estado </label><span class="obg">*</span>
                    <input class="box" type="text" name="estado" id="estado" required>
                </div>

                <div class="caixa">
                    <label class="ti">Endereço </label><span class="obg">*</span>
                    <input class="box" type="text" name="endereco" id="endereco" required>
                </div>

                <input type="button" name="prev" class=" enviar prev acao" value="Anterior">
                <input type="submit" name="next" class="enviar next acao" value="Cadastrar">
            </fieldset>

        </form>

        </div>
        </div>


        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="../js/function.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>


</html>
