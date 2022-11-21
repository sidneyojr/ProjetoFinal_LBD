<?php 

session_start();
 

include("conexaoBanco.php");
  $telefone = $_POST['telefone'];
  $nome = $_POST['nome'];
  
  if($telefone){
            $query = "SELECT * FROM tb_vendedor where telefone = '$telefone'";
            $result = mysqli_query($conexao, $query);
            
            while($row = mysqli_fetch_assoc($result)){
            
                echo "<table border=1>";
                echo "<tr><td>Codigo Vendedor</td>";
                echo "<td>Nome</td>";
                echo "<td>Endereço</td>";
               
                echo "<td>Cidade</td>";
                echo "<td>Estado</td>";
                echo "<td>Telefone</td>";
                echo "<td>Porcentagem de Comissão</td>";
                echo "<td style='background-color:green'></td>";
                echo "<td style='background-color:red'></td></tr>";
                echo "<tr> <td>" . $row['cod_vendedor'] . "</td>"; 
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['endereco'] . "</td>";             
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "<td>" . $row['porc_comissao'] . "</td>";
                echo "<td> <a href='./atualizarVendedor.php?cod_vendedor=".$row['cod_vendedor']."'>Editar</a></td>";
                echo "<td> <a href='./excluirVendedor.php?cod_vendedor=".$row['cod_vendedor']."'>Excluir </a></td></tr>";
                
            }
            }elseif($nome){
  	    	$query = "SELECT * FROM tb_vendedor where nome = '$nome'";
                $result = mysqli_query($conexao, $query);
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo "<table border=1>";
                    echo "<tr><td>Codigo Vendedor</td>";
                    echo "<td>Nome</td>";
                    echo "<td>Endereço</td>";
                   
                    echo "<td>Cidade</td>";
                    echo "<td>Estado</td>";
                    echo "<td>Telefone</td>";
                    echo "<td>Porcentagem de Comissão</td>";
                    echo "<td style='background-color:green'></td>";
                    echo "<td style='background-color:red'></td></tr>";
                    echo "<tr> <td>" . $row['cod_vendedor'] . "</td>"; 
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['endereco'] . "</td>";             
                    echo "<td>" . $row['cidade'] . "</td>";
                    echo "<td>" . $row['estado'] . "</td>";
                    echo "<td>" . $row['telefone'] . "</td>";
                    echo "<td>" . $row['porc_comissao'] . "</td>";
                    echo "<td> <a href='./atualizarVendedor.php?cod_vendedor=". $row['cod_vendedor'] . "'>Editar</a></form></td>";
                    echo "<td> <a href='./excluirVendedor.php?cod_vendedor=". $row['cod_vendedor'] . "'>Excluir </a></td></tr></table>";
                    
                    }
          }

		mysqli_close($conexao);
?>  








