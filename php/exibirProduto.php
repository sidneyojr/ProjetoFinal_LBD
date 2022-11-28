<?php 

session_start();
 

include("conexaoBanco.php");
  $cod_categoria = $_POST['cod_categoria'];
 
  
  
            $query = "SELECT * FROM tb_produtos  where cod_categoria = '$cod_categoria'";
            $result = mysqli_query($conexao, $query);
            
            while($row = mysqli_fetch_assoc($result)){
            
                echo "<table border=1>";
                echo "<tr><td>Codigo Produto</td>";
                echo "<td>Nome</td>";
                echo "<td>Preço</td>";
                echo "<td>Unidade de Medida</td>";
                echo "<td>Quantidade estoque</td>";
                echo "<td>Categoria</td>";
                
                echo "<td style='background-color:green'></td>";
                echo "<td style='background-color:red'></td></tr>";
                echo "<tr> <td>" . $row['cod_prod'] . "</td>"; 
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['preco'] . "</td>";
                echo "<td>" . $row['unidade_medida'] . "</td>";
                echo "<td>" . $row['qtde_estoque'] . "</td>";
                echo "<td>" . $row['cod_categoria'] . "</td>";
               
                echo "<td> <a href='./atualizarProduto.php?cod_prod=".$row['cod_prod']."'>Editar</a></td>";
                echo "<td> <a href='./excluirProduto.php?cod_prod=".$row['cod_prod']."'>Excluir </a></td></tr>";
                
            }
           

		mysqli_close($conexao);
?>  