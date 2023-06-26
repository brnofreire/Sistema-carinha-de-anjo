<?php
$servidor = "localhost"; //se for em outro pc, usar o ip do outro servidor
$usuario = "root";
$senha = "";
$database = "carinhadeanjo";

// Criando a conexão

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

// Checando a conexão

if (!$conexao) {
    die ("Falha de Conexão: " . mysqli_connect_error());
}

//echo "Conectado com sucesso <hr>";
?>