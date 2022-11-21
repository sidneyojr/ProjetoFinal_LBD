<?php
        
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $unidade_medida = $_POST['unidade_medida'];
        $qtde_estoque = $_POST['qtd_estoque'];
        $cod_categoria = $_POST['cod_categoria'];
        include('conexaoBanco.php');
        
        $query = "INSERT INTO tb_produtos (nome, preco, unidade_medida, qtde_estoque, cod_categoria) VALUES ('$nome', '$preco', '$unidade_medida', '$qtde_estoque', '$cod_categoria')";
        $resu = mysqli_query($conexao,$query);
        if (mysqli_insert_id($conexao))
        {
            print "<br> Inclusão realizada com sucesso !!";
        }

        mysqli_close($conexao);

?>