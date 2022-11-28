<?php
    session_start();
    include_once("conexaoBanco.php");
    $cod_prod = filter_input(INPUT_GET, 'cod_prod', FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM tb_produtos where cod_prod = '$cod_prod'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_fetch_assoc($result);
    $cod_prod = $row['cod_prod'];
    echo $cod_prod;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <title>Atualizar Produtos</title>
        <meta charset="utf-8">
   </head>
<body>
    <h1> Atualizar Produtos Quantidade, Preços e Categoria </h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="./editarProduto.php">
        <input type="hidden" name="cod_prod" value="<?php echo $row['cod_prod']; ?>">

        <p><label>Nome: </label><input type="text" name="nome" size="100" value="<?php echo $row['nome'];?>">
        <p><label>Preço: </label><input type="number" name="preco" size="13" value="<?php echo $row['preco'];?>">
        <p><label>Unidade de Medida: </label><input type="text" name="unidade_medida" size="10" value="<?php echo $row['unidade_medida'];?>">
        <p><label>Quantidade no estoque: </label><input type="number" name="qtde_estoque" size="11" step = "1" min="0" max = "1000"  value="<?php echo $row['qtde_estoque'];?>">
        <p><label>Categoria do Produto: <select name="cod_categoria"></label>
      <?php
        include('conexaoBanco.php');
        $query = 'SELECT *FROM tb_categoria ORDER BY descricao;';
        $resu = mysqli_query($conexao, $query) or die(mysqli_connect_error());
        while ($reg = mysqli_fetch_array($resu)) {
        ?>
      <option value="<?php echo $reg['id']; ?>">
        <?php echo $reg['descricao']; ?>
      </option>



      <?php
        }
        #mysqli_close($conexao);


          ?>
      </select>
    <p><input type="submit" value="Salvar">
    
    </form>

    </body>
</html>