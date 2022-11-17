<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado= $_POST['estado'];
$telefone = $_POST['telefone'];
$comissao = $_POST['porcentagemComissao'];
$estado = strtoupper($estado);
include('conexaoBanco.php');

$query = "INSERT INTO tb_vendedor(nome, endereco, cidade, estado, telefone, porc_comissao) 
VALUES('$nome','$endereco','$cidade','$estado','$telefone','$comissao')";
                                                                                                    
                                                                                                                   
                                                                                                 
$resu = mysqli_query($conexao,$query);
    if (mysqli_insert_id($conexao)){
        print "<br> Inclusão Realizada com sucesso";

    }

    mysqli_close($conexao);

?>



