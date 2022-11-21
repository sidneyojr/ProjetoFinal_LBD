<head>
    <meta charset="UTF-8">
    <title> Cadastro de Produtos </title>
</head>
<body>
    <p><h1> Cadastro de Produtos </h1></p>
    <form method="POST" action="./cadastrarProdutos.php">
    <p><label>Nome: <input type="text" name="nome" maxlength="100" required></label> 
    <p><label>Preço: <input type="number" name="preco" maxlength="8" step="0.01" min="0" max="9999.99" required></label> 
    <p><label>Unidade Meidida: <input type="text" name="unidade_medida" maxlength="5" required></label> 
    <p><label>Quantidade em Estoque: <input type="number" name="qtd_estoque" maxlength="100" required></label> 
    <p><label>Código da Especiladade: <select name = "cod_categoria"></label>
        <?php
          include("conexaoBanco.php");
          $query = 'SELECT *FROM tb_categoria ORDER BY descricao;';
          $resu = mysqli_query($conexao, $query) or die(mysqli_connect_error());
          while ($reg = mysqli_fetch_array($resu)) {
          ?>
            <option value="<?php echo $reg['id']; ?>">
              <?php echo $reg['descricao']; ?>
            </option>
            
          
          
          <?php
            }
            mysqli_close($conexao);
          
          
          ?>
        </select>
    <p><input type="submit" value = "Enviar">
    <p><input type="reset" value = "Limpar">
    </form>
</body>
</html>