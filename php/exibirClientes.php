<?php 

session_start();
 

include("conexaoBanco.php");
  $cpf = $_POST['cpf'];
  $nome = $_POST['nome'];
  
  if($cpf){
            $query = "SELECT * FROM tb_cliente where cpf = '$cpf'";
            $result = mysqli_query($conexao, $query);
            
            while($row = mysqli_fetch_assoc($result)){
            
                echo "<table border=1>";
                echo "<tr><td>Codigo cliente</td>";
                echo "<td>Nome</td>";
                echo "<td>Endereço</td>";
                echo "<td>Telefone</td>";
                echo "<td>Limite de Crédito</td>";
                echo "<td>Cidade</td>";
                echo "<td>Estado</td>";
                echo "<td>Email</td>";
                echo "<td>CPF</td>";
                echo "<td style='background-color:green'></td>";
                echo "<td style='background-color:red'></td></tr>";
                echo "<tr> <td>" . $row['cod_cli'] . "</td>"; 
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['endereco'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "<td>" . $row['limite_cred'] . "</td>";
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['cpf'] . "</td>";
                echo "<td> <a href='edit_cli.php?cod_cli=".$row['cod_cli']."'>Editar</a></td>";
                echo "<td> <a href='excluir.php?cod_cli=".$row['cod_cli']."'>Excluir </a></td></tr>";
                
            }
            }elseif($nome){
  	    	$query = "SELECT * FROM tb_cliente where nome = '$nome'";
                $result = mysqli_query($conexao, $query);
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo "<table border=1>";
                    echo "<tr><td>Codigo cliente</td>";
                    echo "<td>Nome</td>";
                    echo "<td>Endereço</td>";
                    echo "<td>Telefone</td>";
                    echo "<td>Limite de Crédito</td>";
                    echo "<td>Cidade</td>";
                    echo "<td>Estado</td>";
                    echo "<td>Email</td>";
                    echo "<td>CPF</td>";
                    echo "<td style='background-color:green'></td>";
                    echo "<td style='background-color:red'></td></tr>";
                    echo "<tr> <td>" . $row['cod_cli'] . "</td>";                    
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['endereco'] . "</td>";
		    echo "<td>" . $row['telefone'] . "</td>";
	            echo "<td>" . $row['limite_cred'] . "</td>";
		    echo "<td>" . $row['cidade'] . "</td>";
		    echo "<td>" . $row['estado'] . "</td>";
		    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['cpf'] . "</td>";
                    echo "<td> <a href='atualizarCliente.php?cod_cli=". $row['cod_cli'] . "'>Editar</a></form></td>";
                    echo "<td> <a href='excluir.php?cod_cli=". $row['cod_cli'] . "'>Excluir </a></td></tr></table>";
                    
                    }
          }

		mysqli_close($conexao);
?>  











