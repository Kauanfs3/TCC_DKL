<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Cadastro endereço</title>
   <link rel="stylesheet" href="../css/cadastra.css">
   <link rel="stylesheet" href="../css/endereco.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="questionario">

      <a href="../app/pessoa.php">
         <img src="../img/previous.svg">
      </a>

      <div class="progresso">
         <div class="pessoa">
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
               </svg>
            </div>

            <span class="etapa1">Pessoa</span>
         </div>

         <div class="linha1"></div>

         <div class="endereco">
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
               </svg>
            </div>

            <span class="etapa2">Endereço</span>
         </div>

         <div class="linha2"></div>

         <div class="formPag">
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
               </svg>
            </div>

            <span class="etapa3">Pagamento</span>
         </div>

         <div class="linha3"></div>

         <div class="pedido">
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
               </svg>
            </div>

            <span class="etapa4">Pedido</span>
         </div>

      </div>

      <div class="form-inner">

         <form action="#" class="signup" method="POST">


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

            <a href="formaPag.php?seguir1">
               <div class="enviar">
                  seguir
               </div>
            </a>

         </form>
      </div>
   </div>

</body>
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_n = $_POST['data_nascimento'];
<?php $pessoa = array($nome,$email,$senha,$data_n) ?>
</html>