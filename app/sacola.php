<?php

session_start();

require_once('../prog/classes/conexao.php');
require_once('../prog/componente.php');

$db = new Conexao("tcc", "Produtos");

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["id_produto"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>window.location = 'sacola.php'</script>";
            }
        }
    }
}

if (isset($_POST['add'])) {
    //print_r ($_POST['id_produto']);   printar id

    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "id_produto");

        if (in_array($_POST['id_produto'], $item_array_id)) {
            echo "<script> window.location='index.php</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'id_produto' => $_POST['id_produto']
            );

            $_SESSION['cart'][$count] = $item_array;
        }
    } else {

        $item_array = array(
            'id_produto' => $_POST['id_produto']
        );

        //criar nova sessao variavel
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sacola</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="../css/sacola.css" rel="stylesheet">
</head>

<body>
    <br>
    <br>


    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">

                    <a href="<?php echo $_SESSION['pagina']; ?>"><img src="../img/previous.png" class="voltar"></a>


                    <?php

                    $total = 0;
                    if (isset($_SESSION['cart'])) {

                        $id_produto = array_column($_SESSION['cart'], 'id_produto');
                        $result = $db->getDataPromocao();

                        while ($row = mysqli_fetch_assoc($result)) {

                            foreach ($id_produto as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['img_produto'], $row['nome_produto'], $row['valor_produto'], $row['id']);
                                    $total = $total + (int)$row['valor_produto'];
                                }
                            }
                        }
                    }


                    if (isset($_SESSION['cart'])) {

                        $id_produto = array_column($_SESSION['cart'], 'id_produto');
                        $result = $db->getDataNovidades();

                        while ($row = mysqli_fetch_assoc($result)) {

                            foreach ($id_produto as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['img_produto'], $row['nome_produto'], $row['valor_produto'], $row['id']);
                                    $total = $total + (int)$row['valor_produto'];
                                }
                            }
                        }
                    }


                    if (isset($_SESSION['cart'])) {

                        $id_produto = array_column($_SESSION['cart'], 'id_produto');
                        $result = $db->getDataRefils();

                        while ($row = mysqli_fetch_assoc($result)) {

                            foreach ($id_produto as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['img_produto'], $row['nome_produto'], $row['valor_produto'], $row['id']);
                                    $total = $total + (int)$row['valor_produto'];
                                }
                            }
                        }
                    }


                    if (isset($_SESSION['cart'])) {

                        $id_produto = array_column($_SESSION['cart'], 'id_produto');
                        $result = $db->getDataKits();

                        while ($row = mysqli_fetch_assoc($result)) {

                            foreach ($id_produto as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['img_produto'], $row['nome_produto'], $row['valor_produto'], $row['id']);
                                    $total = $total + (int)$row['valor_produto'];
                                }
                            }
                        }
                    }

                    if ($total == 0) {
                        echo "Nenhum produto foi adicionado na sacola!";
                    }



                    ?>

                </div>
            </div>
            <div class="col">

                <div class="pt-4 info">
                    <h6 class="titulo">Informações da compra</h6>
                    <hr>
                    <div class="row ">
                        <div class="col-md-6">

                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Produtos ($count itens)</h6>";
                            } else {
                                echo "<h6>Produtos (0 itens)</h6>";
                            }
                            ?>

                            <h6>Frete</h6>
                            <hr>
                            <h6>Valor a pagar</h6>
                        </div>

                        <div class="col-md-6">
                            <h6>R$<?php echo $total; ?></h6>
                            <h6 class="text-success">GRATIS</h6>
                            <hr>
                            <h6>R$<?php echo $total; ?></h6>
                        </div>
                    </div>
                </div>
                <div >
                    <input class="seguir" type="submit" value="Finalizar compra" id="submit">
                </div>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>