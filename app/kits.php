<?php

//iniciar sessao
session_start();

$_SESSION['pagina'] = basename ($_SERVER['PHP_SELF']);

require_once('../prog/classes/conexao.php');
require_once('../prog/componente.php');

//prog CARRINHO

if (isset($_POST['add'])){
  //print_r ($_POST['id_produto']);   printar id

  if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'],"id_produto");

    if(in_array($_POST['id_produto'],$item_array_id)){
      echo"<script>alert('O produto já está adicionado ao carrinho ..!')</script>";
      echo"<script> window.location='index.php</script>";
    
    }else{
      $count= count($_SESSION['cart']);
      $item_array = array(
        'id_produto'=> $_POST['id_produto']
      );

      $_SESSION['cart'][$count] = $item_array;
      print_r($_SESSION['cart']);
    }

  }else{

    $item_array = array(
      'id_produto'=> $_POST['id_produto']
    );

    //criar nova sessao variavel
    $_SESSION['cart'][0]=$item_array;
    print_r($_SESSION['cart']);
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Kits</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="../css/index.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<header class="header fixed-top">
    <nav>
        <ul class="marca">
          <li><a href="index.php"><img class="logo" src="../img/logo.png"></a></li>
          <li><a class="nome" href="index.php">Elementary</a></li>
        </ul>
    </nav>
    



    <nav>

      <a href="#" id="login"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="pessoa bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></a>
    
      <div class="arrow-up"></div>


      <div class="login">
        <form class="entrar" action="../prog/testelogin2.php" method="POST">
          <label class="ent">LOGIN</label>

          <input type="email" placeholder="E-mail" name="email" required>
          <input type="password" placeholder="Senha"  name="senha" required>
          <input type="submit" name="submit" value="ENTRAR"/>

          <div class="help">
            <a href="cadastra.php" class="ajuda">Criar conta</a>
          </div>
        </form>
       
      </div>
    </div>
     
      <a href="sacola.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sacola bi bi-bag-fill" viewBox="0 0 16 16">
          <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
        </svg>

        <h4>
          <?php
            if(isset($_SESSION['cart'])){
              $count= count($_SESSION['cart']);

              echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
            }else{
                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
            }
          ?>
        </h4>
      </a> 
      
      <div class="comp menu-section">
        <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>

        <nav class="compac">
          <div class="l-compac">
            <ul>
              <li><a href="#">Perfil</a></li>
              <li><a href="#">Modo noturno</a></li>
              <li><a class="#" href="index.php">Home</a></li>
              <li><a href="#">Perfumes</a></li>
              <li><a href="#">Refil</a></li>
              <li><a href="#">Promoções</a></li>
              <li><a href="#">Kits</a></li>
            </ul>
          </div>
          
        </nav>

      </div>
    </nav>
</header>

<!---------------------------------------------------------------CABEÇALHO INF----------------------------------------->

<nav class="cabecalho" id="navbar">
        <div class="links">
          <ul>
            <li><a class="#" href="index.php">Home</a></li>
            <li><a href="perfumes.php">Perfumes</a></li>
            <li><a href="promocoes.php">Promoções</a></li>
            <li><a href="refils.php">Refil</a></li>
            <li><a href="kits.php">Kits</a></li>
          </ul>
        </div>
    
 
        <a href="#" id="conf" class="conf"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sacola-comp bi bi-gear-fill" viewBox="0 0 16 16"><path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg></a>      
      </nav>




<!---------------------------------------------------------------INICIO----------------------------------------->
<div class="container-fluid">
  <div class="intro row">
    <div class="col-2">
    </div>

    <div class="texti col-4">
      <h2>Kits</h2>
      <a href="#">Veja aqui</a>
    </div>



    <div class="col-4">
      <div class="qs"></div>
      <img class="qm "src="../img/propaganda.jpg">
      <div class="qi"></div>
    </div>

    <div class="col-2">
    </div>

  </div>
</div>

<!---------------------------------------------------------------LINHA 1----------------------------------------->
    
<div class="titulo container-fluid">
  <h1 class="ti">Promoções</h1>
</div>

<div class="container">

  <!--slide box-->
  <div class="row">
            <div class="owl-carousel owl-theme">

            <?php
              //component("produto 1",  "R$599,00", "../img/p1.jpg");
              
              
              $result = $conexao->getDataPromocao();

              while ($row= mysqli_fetch_assoc($result)){
                component($row['nome_produto'], $row['valor_produto'], $row['img_produto'], $row['id']);
              }

            ?>
               
               
            </div>

            <a class="ver" href="#">Ver mais...</a>

  </div>

</div>
<!---------------------------------------------------------------LINHA 2----------------------------------------->
<div class="titulo container-fluid">
  <h1 class="ti">Novidades</h1>
</div>

<div class="container">

  <!--slide box-->
  <div class="row">
            <div class="owl-carousel owl-theme">

            <?php
              
              $result = $conexao->getDataNovidades();

              while ($row= mysqli_fetch_assoc($result)){
                component($row['nome_produto'], $row['valor_produto'], $row['img_produto'], $row['id']);
              }

            ?>
               
            </div>
            <a class="ver" href="#">Ver mais...</a>
  </div>

</div>


<!---------------------------------------------------------------LINHA 3----------------------------------------->
<div class="titulo container-fluid">
  <h1 class="ti">Refils</h1>
</div>

<div class="container">

  <!--slide box-->
  <div class="row">
            <div class="owl-carousel owl-theme">

            <?php
              $result = $conexao->getDataRefils();

              while ($row= mysqli_fetch_assoc($result)){
                component($row['nome_produto'], $row['valor_produto'], $row['img_produto'], $row['id']);
              }

            ?>
               
            </div>
            <a class="ver" href="#">Ver mais...</a>
  </div>

</div>

<!---------------------------------------------------------------LINHA 4----------------------------------------->
<div class="titulo container-fluid">
  <h1 class="ti">Kits</h1>
</div>

<div class="container">

  <!--slide box-->
  <div class="row">
            <div class="owl-carousel owl-theme">

            <?php
              $result = $conexao->getDataKits();

              while ($row= mysqli_fetch_assoc($result)){
                component($row['nome_produto'], $row['valor_produto'], $row['img_produto'], $row['id']);
              }

            ?>
               
            </div>
            <a class="ver" href="#">Ver mais...</a>
  </div>

</div>


<!---------------------------------------------------------------BOTÃO SUBIR AO TOPO----------------------------------------->

<button class="scrollTop" onclick="backTop()">
  <img src="../img/next.svg" alt="">
</button>


<!---------------------------------------------------------------RODAPÉ----------------------------------------->
<footer class="footer">
  <div class="contfooter">
      <div class="row">

          <div class="footer-col">
              <h4>Inicio</h4>
              <p><a href="#">Perfumes</a></p>
              <p><a href="#">Promoções</a></p>
              <p><a href="#">Refil</a></p>
              <p><a href="#">Kits</a></p>
          </div>

          <div class="footer-col">
              <h4>Suporte</h4>
              <p><a href="#">Sobre nós</a></p>
              <p><a href="#">Duvidas Frequentes</a></p>
          </div>

          <div class="footer-col">
              <h4>Contato</h4>
              <p><a href="#">Telefone: (11) 55-91111-1111</a></p>
              <p><a href="#">Email: Elementary@gmail.com</a></p>
          </div>
          
          <div class="footer-col">
              <h4>Social</h4>
              <div class="social-links">
              <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
              </div>
          </div>
      </div>
  </div>
</footer>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/index.js"></script>


<script type="text/javascript">
  $(document).ready(function(){
      var arrow = $(".arrow-up");
      var form = $(".login");
      var status = false;
      $("#login").click(function(event){
          event.preventDefault();
          if(status == false){
              arrow.fadeIn();
              form.fadeIn();
              status = true;
          }else{
              arrow.fadeOut();
              form.fadeOut();
              status = false;
          }
      })
  })
</script>

<script>

  const nextIcon = '<img src="../img/next.svg" class="next" alt:"next">';
  
  const prevIcon = '<img src="../img/previous.svg" class="prev" alt:"prev">';



       $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true, 
    navText: [
      prevIcon,
      nextIcon
    ],
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        600:{
            items:3
        },
        700:{
            items:3
        },
        900:{
            items:4
        },
        1000:{
            items:5
        }
    }
})
</script>


<script>
  // botão subir ao topo//

window.addEventListener('scroll', function() {
  let scroll = document.querySelector('.scrollTop')
    scroll.classList.toggle('active', window.scrollY > 100)
})

function backTop() {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth"
  })
}
 </script>
   
</body>
</html>