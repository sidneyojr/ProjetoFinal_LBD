<?php
session_start();
include("conexaoBanco.php");

$cod_prod = $_POST['cod_prod'];
$nome=$_POST['nome'];
$preco =$_POST['preco'];
$unidade_medida =$_POST['unidade_medida'];
$qtde_estoque = $_POST['qtde_estoque'];
$cod_categoria = $_POST['cod_categoria'];

echo "$nome"."<br>";
echo "$qtde_estoque"."<br>";
echo "$unidade_medida"."<br>";
echo "$preco"."<br>";
echo "$cod_prod"."<br>";
echo "$cod_categoria";

#$query = "UPDATE tb_produtos SET nome = 'Baianão', preco ='556', unidade_medida='milheiro', qtde_estoque = '5', cod_categoria='6', WHERE cod_prod = '1'";

$query = "UPDATE tb_produtos SET nome = '$nome', preco ='preco', unidade_medida ='$unidade_medida', qtde_estoque ='$qtde_estoque', cod_categoria ='$cod_categoria' WHERE cod_prod ='$cod_prod'";


//erro pra
$resultado = mysqli_query($conexao,$query) or die (mysqli_connect_error());

if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:blue'> deu bom</p>";
    header("Location: atualizarProduto.php");
}else{
    $_SESSION['msg'] = "<p style='color:red'> deu ruim</p>";
    header("Location: atualizarProduto.php");

}
mysqli_close($conexao);
?>