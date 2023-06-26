<?php

include ("conexaomysql.php");

// ================ Recebendo as variáveis da conta =============//

@$nome = $_POST['nome'];
@$sobrenome = $_POST['sobrenome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];
@$senha2 = $_POST['senha2'];

// ================= Recebendo as variáveis do endereço ================//

@$rua = $_POST['rua'];
@$cidade = $_POST['cidade'];
@$estado = $_POST['estado'];
@$cep = $_POST['cep'];

// ================== Recebendo as variáveis da renda ==============//


@$renda = $_POST['renda'];


// ================= Imprimindo as variáveis da conta =============//

echo "$nome<br>";
echo "$sobrenome<br>";
echo "$email<br>";
echo "$senha<br>";
echo "$senha2<br>";

// ================== Imprimindo as variáveis do endereço ===================//

echo "$rua<br>";
echo "$cidade<br>";
echo "$estado<br>";
echo "$cep<br>";

// =================== Imprimindo as variáveis da renda ==============//


echo "$renda<br>";


// ============================================================================//

// INSERINDO DADOS NA TABELA

$sql = "INSERT INTO conta(nome,sobrenome,email,senha,senha2,rua,cidade,estado,cep,renda)
VALUES ('$nome','$sobrenome','$email','$senha','$senha2','$rua','$cidade','$estado','$cep','$renda')";

if(mysqli_query($conexao, $sql)){
    echo "Novo registro criado com sucesso";
} else {
    echo "Error: " .$sql. "<br>" .mysqli_error($conexao);
}
mysqli_close($conexao);

// ============================================================================//

header('Location: admusuario.php'); //efetua o cadastro no banco de dados e manda para o admusuario

?>