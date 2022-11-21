<?php
    session_start();
    include_once("conexaoBanco.php");
    $cod_cli = filter_input(INPUT_GET, 'cod_cli', FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM tb_cliente where cod_cli = '$cod_cli'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_fetch_assoc($result);
    $cod_cli = $row['cod_cli'];
    echo $cod_cli;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <title>Atualizar Dados Cliente</title>
        <meta charset="utf-8">
   </head>
<body>
    <h1> Alteraçaão de dados do Cliente </h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="">
        <input type="hidden" name="cod_cli" value="<?php echo $row['cod_cli']; ?>">

        <p><label>Nome: </label><input type="text" name="nome" size="100" values="<?php echo $row['nome'];?>">
        <p><label>Endereço: </label><input type="text" name="endereco" size="200" values="<?php echo $row['endereco'];?>">
        <p><label>Telefone: </label><input type="text" name="telefone" size="15" values="<?php echo $row['telefone'];?>">
        <p><label>Limite de Crédito: </label><input type="number" name="limite_cred" size="10,2" values="<?php echo $row['limite_cred'];?>">
        <p><label>Cidade: </label><input type="text" name="cidade" size="100" values="<?php echo $row['cidade'];?>">
        <p><label>Estado: </label><select name="estado">
				    <option value="SP"> SP </option>
				    <option value="BA"> RJ </option>
				    <option value="RJ"> MG </option>
				    <option value="MG"> ES </option>
				    <option value="PR"> BA </option>
				   </select>
        <p><label>Email: </label><input type="text" name="email" size="100" values="<?php echo $row['email'];?>">
        <p><label>CPF: </label><input type="text" name="cpf" size="100" values="<?php echo $row['cpf'];?>">
    <?php
        mysqli_close($conexao);
    ?>
    <input type="submit" value="Salvar">
    </form>
    </body>
</html>
