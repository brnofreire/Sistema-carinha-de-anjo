<?php
include_once('conexaomysql.php');

if(isset($_POST['update'])){
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $renda = $_POST['renda'];
    

    echo $codigo;
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $sobrenome;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $senha;
    echo "<br>";
    echo $senha2;
    echo "<br>";
    echo $rua;
    echo "<br>";
    echo $cidade;
    echo "<br>";
    echo $estado;
    echo "<br>";
    echo $cep;
    echo "<br>";
    echo $renda;
    echo "<br>";
   
  header('Location:admusuario.php');
}
?>