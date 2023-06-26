<?php
//serve para editar os dados 

include_once('conexaomysql.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM conta WHERE codigo=$id";
    $resultado = mysqli_query($conexao, $sql);
    $numreg = mysqli_num_rows($resultado);

    if ($numreg > 0) {
        while ($conteudo = mysqli_fetch_assoc($resultado)) {
            $codigo = $conteudo['codigo'];
            $nome = $conteudo['nome'];
            $sobrenome = $conteudo['sobrenome'];
            $email = $conteudo['email'];
            $senha = $conteudo['senha'];
            $senha2 = $conteudo['senha2'];
            $rua = $conteudo['rua'];
            $cidade = $conteudo['cidade'];
            $estado = $conteudo['estado'];
            $cep = $conteudo['cep'];
            $renda = $conteudo['renda'];
            
        }
    }

    //header('Location:admusuario.php');
}
?>

<!<!DOCTYPE <html>
    <html lang="pt-br">

    <head>
        <meta charset=utf-8 />
        <title>Carinha de Anjo -edit_dados-</title>
        <link rel="stylesheet" href="form.css" />
    </head>

    <body>
        <div id="container">
            <h1>Editar Conta</h1>
            <form method="post" action="saveEdit.php">
                <!-- INICIANDO OS CAMPOS DA CONTA  -->

                <FIELDSET>
                    <h2 class="conta">CONTA</h2>
                    <ul>
                        <li>
                            <label for="codigo">Código:</label>
                            <input type="text" name="codigo" id="codigo" class="large" value="<?php echo $codigo; ?>" />
                        </li>
                        <li>
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" class="large" value="<?php echo $nome; ?>" required="required" />
                        </li>
                        <li>
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" id="sobrenome" name="sobrenome" class="large" value="<?php echo $sobrenome; ?>" required="required" />
                        </li>
                        <li>
                            <label for="E-mail">E-mail:</label>
                            <input type="text" id="email" name="email" class="large" value="<?php echo $email; ?>" required="required" />
                        </li>
                        <li>
                            <label for="password">Senha:</label>
                            <input type="text" id="senha" name="senha" class="large" value="<?php echo $senha; ?>" required="required" />
                        </li>
                        <li>
                            <label for="password">Redigite a senha:</label>
                            <input type="text" id="senha2" name="senha2" class="large" value="<?php echo $senha2; ?>" required="required" />
                        </li>
                    </ul>
                </FIELDSET>
                <!--INCIANDO CAMPOS DE ENDEREÇO -->
                <fieldset>
                    <H2 class="endereco">Endereço</H2>
                    <ul>
                        <li>
                            <label for="rua">Rua:</label>
                            <input type="text" id="rua" name="rua" class="large" value="<?php echo $rua; ?>" />
                        </li>
                        <li>
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="large" value="<?php echo $cidade; ?>" />
                        </li>
                        <li>
                            <label for="estado">Estado:</label>
                            <select id="estado" name="estado">
                                <option value="AC" <?php if ($estado == 'AC') echo 'selected'; ?>>Acre</option>
                                <option value="AL" <?php if ($estado == 'AL') echo 'selected'; ?>>Alagoas</option>
                                <option value="AP" <?php if ($estado == 'AP') echo 'selected'; ?>>Amapá</option>
                                <option value="AM" <?php if ($estado == 'AM') echo 'selected'; ?>>Amazonas</option>
                                <option value="BA" <?php if ($estado == 'BA') echo 'selected'; ?>>Bahia</option>
                                <option value="CE" <?php if ($estado == 'CE') echo 'selected'; ?>>Ceará</option>
                                <option value="DF" <?php if ($estado == 'DF') echo 'selected'; ?>>Distrito Federal</option>
                                <option value="ES" <?php if ($estado == 'ES') echo 'selected'; ?>>Espírito Santo</option>
                                <option value="GO" <?php if ($estado == 'GO') echo 'selected'; ?>>Goiás</option>
                                <option value="MA" <?php if ($estado == 'MA') echo 'selected'; ?>>Maranhão</option>
                                <option value="MT" <?php if ($estado == 'MT') echo 'selected'; ?>>Mato Grosso</option>
                                <option value="MS" <?php if ($estado == 'MS') echo 'selected'; ?>>Mato Grosso do Sul</option>
                                <option value="MG" <?php if ($estado == 'MG') echo 'selected'; ?>>Minas Gerais</option>
                                <option value="PA" <?php if ($estado == 'PA') echo 'selected'; ?>>Pará</option>
                                <option value="PB" <?php if ($estado == 'PB') echo 'selected'; ?>>Paraíba</option>
                                <option value="PR" <?php if ($estado == 'PR') echo 'selected'; ?>>Paraná</option>
                                <option value="PE" <?php if ($estado == 'PE') echo 'selected'; ?>>Pernambuco</option>
                                <option value="PI" <?php if ($estado == 'PI') echo 'selected'; ?>>Piauí</option>
                                <option value="RJ" <?php if ($estado == 'RJ') echo 'selected'; ?>>Rio de Janeiro</option>
                                <option value="RN" <?php if ($estado == 'RN') echo 'selected'; ?>>Rio Grande do Norte</option>
                                <option value="RS" <?php if ($estado == 'RS') echo 'selected'; ?>>Rio Grande do Sul</option>
                                <option value="RO" <?php if ($estado == 'RO') echo 'selected'; ?>>Rondônia</option>
                                <option value="RR" <?php if ($estado == 'RR') echo 'selected'; ?>>Roraima</option>
                                <option value="SC" <?php if ($estado == 'SC') echo 'selected'; ?>>Santa Catarina</option>
                                <option value="SP" <?php if ($estado == 'SP') echo 'selected'; ?>>São Paulo</option>
                                <option value="SE" <?php if ($estado == 'SE') echo 'selected'; ?>>Sergipe</option>
                                <option value="TO" <?php if ($estado == 'TO') echo 'selected'; ?>>Tocantins</option>

                            </select>
                            <li>
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep" name="cep" class="small" value="<?php echo $cep;?>"/>
                            </li>
                        </li>
                    </ul>
                </fieldset>
                <!--FIM DO ENDEREÇO-->
                <!--INICIAR OS CAMPOS DE PERFIL PÚBLICO-->

                <FIELDSET>
                    <h2 class="perfil-publico">Renda Familiar</h2>
                    <ul>
                        <li>
                            <label for="renda">Renda:</label>
                            <input type="number" name="renda" id="renda" class="small" value="<?php echo $renda;?>" />
                        </li>

                    </ul>
                </FIELDSET>

                <!--FIM DO PERFIL PÚBLICO-->
                <fieldset>
                    <input type="submit" name="update" id="submit">
                </fieldset>
            </form>
        </div>
    </body>

    </html>