<?php
include_once ('conexaomysql.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];

        // sql para deletar registro

        $sql = "DELETE FROM conta WHERE codigo=$id";

        if(mysqli_query($conexao, $sql)){
            echo "Registro deletado com sucesso";
        } else {
            echo "Erro ao deletar registro: " . mysqli_error($conexao);
        }

    }

    header('Location: admusuario.php');

?>