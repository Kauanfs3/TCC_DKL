<?php
class conexao {
    public $host;
    public $user;
    public $password;
    public $db;

    function conectar() {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->db = "tcc";

        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->db);

        if($conn){
            
            return $conn;
        }
    }
    //get produtos do banco de dado
    function getDataPromocao(){
        $sql = "SELECT * FROM produtos WHERE categoria ='promocao'";
   
        $result = mysqli_query($this->conectar(),$sql);
   
        if(mysqli_num_rows($result)> 0){
            return $result;
        }
    }

    function getDataNovidades(){
        $sql = "SELECT * FROM produtos WHERE categoria ='novidades'";
   
        $result = mysqli_query($this->conectar(),$sql);
   
        if(mysqli_num_rows($result)> 0){
            return $result;
        }
    }

    function getDataRefils(){
        $sql = "SELECT * FROM produtos WHERE categoria ='refils'";
   
        $result = mysqli_query($this->conectar(),$sql);
   
        if(mysqli_num_rows($result)> 0){
            return $result;
        }
    }

    function getDataKits(){
        $sql = "SELECT * FROM produtos WHERE categoria ='kits'";
   
        $result = mysqli_query($this->conectar(),$sql);
   
        if(mysqli_num_rows($result)> 0){
            return $result;
        }
    }



}

 $conexao = new Conexao;
 $conn = $conexao->conectar();
?>