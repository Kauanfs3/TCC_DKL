<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="../css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="questionario">

         <div class="titulo">
            <h1>Login</h1>
         </div>

            <div class="form-inner">

               <form action="#" class="signup" method="POST">

                  <div class="caixa">
                     <label class="ti">E-mail </label><span class="obg">*</span>
                     <input type="email" name="email" required>
                  </div>

                  <div class="caixa">
                     <label class="ti">Senha </label><span class="obg">*</span>
                     <input type="password" name="senha" required>
                  </div>

                  <div class="enviar">
                     <input type="submit" value="Cadastrar" id="submit" name="submit"/>
                  </div>

                  <div class="ncad">
                     Não é cadastrado? <a href="cadastra.php">Cadastre-se</a>
                  </div>

               </form>

            </div>
         </div>
      </div>
   </body>
</html>