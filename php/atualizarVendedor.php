<?php
    session_start();
    include_once("conexaoBanco.php");
    $cod_vendedor = filter_input(INPUT_GET, 'cod_vendedor', FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM tb_vendedor where cod_vendedor = '$cod_vendedor'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_fetch_assoc($result);
    $cod_vendedor = $row['cod_vendedor'];
    echo $cod_vendedor;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <title>Atualizar Dados Vendedor</title>
        <meta charset="utf-8">
   </head>
<body>
    <h1> Alteração de Dados do Vendedor </h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="./editarVendedor.php">
        <input type="hidden" name="cod_vendedor" value="<?php echo $row['cod_vendedor']; ?>">

        <p><label>Nome: </label><input type="text" name="nome" size="100" value="<?php echo $row['nome'];?>">
        <p><label>Endereço: </label><input type="text" name="endereco" size="200" value="<?php echo $row['endereco'];?>">
        
        
        <p><label>Cidade: </label><input type="text" name="cidade" size="100" value="<?php echo $row['cidade'];?>">
        <p><label>Estado: </label><select name="estado">
				    <option value="SP"> SP </option>
				    <option value="BA"> BA </option>
				    <option value="RJ"> RJ </option>
				    <option value="MG"> MG </option>
				    <option value="PR"> PR </option>
				   </select>
        <p><label>Telefone: </label><input type="text" name="telefone" size="15" value="<?php echo $row['telefone'];?>">
        
        <p><label>Porcentagem de Comissão: </label><input type="number" step="0.05" min="0" max="0.3" name="porc_Comissao" value="<?php echo $row['porc_comissao'];?>">

    <input type="submit" value="Salvar" onclick="">
    </form>
    </body>
</html>