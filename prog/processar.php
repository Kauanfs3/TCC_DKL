<?php
include_once '../prog/conexaocad.php';
session_start();

$dados= filter_input_array (INPUT_POST, FILTER_DEFAULT);

if(!empty($dados)){
   
    $consulta = $conn->query("SELECT email, nome FROM usuarios WHERE email = '". $dados["email"] ."' AND nome = '". $dados["nome"] ."'");

    $linha = $consulta->fetch(PDO::FETCH_ASSOC);


    if($linha != NULL){

        $_SESSION["flash"]= "<p class='alert alert-error'>Usuário ja cadastrado</p>";

        header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));

        exit;
    }


    $query_usuario = "INSERT INTO usuarios (nome, senha, email, telefone, data_nasc, cidade, estado, endereco) VALUES ('" . $dados['nome']."', '" . $dados['senha']."','" . $dados['email']."','" . $dados['telefone']."', '" . $dados['data_nasc']."','" . $dados['cidade']."', '" . $dados['estado']."','" . $dados['endereco']."')";

  
    $cad_usuario = $conn -> prepare ($query_usuario);
    
    $cad_usuario -> execute();

    $count = $cad_usuario -> rowCount();
    

    if($count){
        echo "<p style='color: green;'>usuario cadastrado com sucesso</p>";
    }else {
        echo "<p style='color: #ff0000;'>usuario nao cadastrado</p>";
    }

    header("Location: usuario.php");
    exit;
    
}




?>