<?php
        
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $limite_cred = $_POST['limite_cred'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        include('conexaoBanco.php');
        
        $query = "INSERT INTO tb_cliente (nome, endereco, telefone, limite_cred, cidade, estado, email, cpf) VALUES ('$nome', '$endereco', '$telefone', '$limite_cred', '$cidade', '$estado', '$email', '$cpf')";
        $resu = mysqli_query($conexao,$query);
        if (mysqli_insert_id($conexao))
        {
            print "<br> Inclusão realizada com sucesso !!";
        }

        mysqli_close($conexao);

?>