<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <title>Buscar Produto</title>
        <meta charset="utf-8">
    </head>
	<link rel="stylesheet" href="../css/buscaCliente.css">
    <body>
		<div class="container">
			<h1>Localizar Produto<br> e <br> Alterar Dados ou Excluir</h1>
			<form method="POST" action="./exibirProduto.php">
			
    
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
        mysqli_close($conexao);


          ?>
      </select>
    <p><input type="submit" value="Enviar">
    <p><input type="reset" value="Limpar">
  </form>
		</div>
     </body>
</html>