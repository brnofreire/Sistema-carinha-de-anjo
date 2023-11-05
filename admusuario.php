<?php
include ("conexaomysql.php");

//#####################################################



//buscar os nomes das contas cadastradas

    $sql = "SELECT * FROM `conta`";

//-----------------------------------------------------

    $numreg = 0;
    $resultado = mysqli_query($conexao, $sql);

    $numreg = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Administração de Usuários</title>
        <link rel="stylesheet" href="form.css"/>
    </head>
    <h1 align="center">CADASTRO DE USUÁRIOS</h1>

    <?php echo "<strong> Total de Usuários: </strong> $numreg<br><br>" ?>
    <a href="form.html">Cadastrar novo usuário</a><br><br> 

    <table border=1 align="center">
        <tr>
            <td>Cód.</td>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Email</td>
            <td>Endereço</td>
            <td>Ações</td>
        </tr>
    

    <?php
    #Exibe os resultados.

    while($conteudo = mysqli_fetch_assoc($resultado)){
        echo "<TR>";
        echo "<TD>" . $conteudo['codigo']. "</TD>";
        echo "<TD>" . $conteudo['nome']. "</TD>";
        echo "<TD>" . $conteudo['sobrenome']. "</TD>";
        echo "<TD>" . $conteudo['email']. "</TD>";
        echo "<TD>" . $conteudo['rua']. "</TD>";
        echo "<TD>
        <a href='editar.php?id=$conteudo[codigo]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-
        .168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0
        0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-
    .   5a.5.5 0 0 1-.468-.325z'/>
        </svg>
        <a/>
        <a href='delete.php?id=$conteudo[codigo]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-
        1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8
        5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
        </svg>
        <a/>
        </TD>";    
    }

    ?>
    </table>
</html>
