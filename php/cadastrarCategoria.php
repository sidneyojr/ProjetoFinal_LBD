<?php
$nome = $_POST['nome'];
include('conexaoBanco.php');

$query = "INSERT INTO tb_categoria (descricao) VALUES ('$nome')";
$resu = mysqli_query($conexao,$query);
    if (mysqli_insert_id($conexao)){
        print "<br> Inclusão Realizada com sucesso";

    }

    mysqli_close($conexao);

?>