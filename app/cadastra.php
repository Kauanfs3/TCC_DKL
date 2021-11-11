<?php

if(isset($_POST['submit']))
{

include_once('../prog/config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco)
VALUES('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')";

$result = mysqli_query($conexao,$sql);

if($result==1){
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location:../app/formaPag.php");
}

}
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Cadastrar</title>
      <link rel="stylesheet" href="../css/cadastra.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>
      <div class="questionario">

         <div class="titulo">
            <h1>Cadastro de cliente</h1>
         </div>

         <div class="form-inner">

            <form action="#" class="signup" method="POST">

                  
               <div class="caixa">
                  <label class="ti">Nome completo </label><span class="obg">*</span>
                  <input class="box" type="text" name="nome" id="nome" required>
               </div>

               <div class="caixa">
                  <label class="ti">E-mail </label><span class="obg">*</span>
                  <input class="box" type="text"name="email" id="email" required>
               </div>

               <div class="caixa">
                  <label class="ti">Senha </label><span class="obg">*</span>
                  <input class="box" type="password" name="senha" id="senha" required>
               </div>

               <div class="caixa">
                  <label class="ti">Telefone </label><span class="obg">*</span>
                 <input class="box" type="tel" id="telefone" required>
               </div>

               <div class="caixa">
                  <label class="ti">Data de nascimento </label><span class="obg">*</span>
                  <input class="box" type="date" name="data_nascimento" id="data_nascimento" required>
               </div>

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

               <div class="enviar">
                  <input type="submit" value="Cadastrar" id="submit" name="submit"/>
               </div>

            </form>          
         </div>
      </div>
     
   </body>
</html>