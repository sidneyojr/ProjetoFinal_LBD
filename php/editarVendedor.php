<?php
session_start();
include("conexaoBanco.php");
$cod_vendedor = $_POST['cod_vendedor'];
$nome=$_POST['nome'];
$endereco =$_POST['endereco'];
$cidade =$_POST['cidade'];
$estado = $_POST['estado'];
$estado = strtoupper($estado);
$telefone = $_POST['telefone'];
$porc_comissao = $_POST['porc_Comissao'];


#$query = "UPDATE tb_vendedor SET nome = '$nome', endereco ='$endereco', cidade ='$cidade', estado ='$estado', telefone ='$telefone', porc_comissao ='$porc_comissao' WHERE cod_vendedor ='$cod_vendedor'";

$query = "UPDATE tb_vendedor SET nome = '$nome', endereco ='$endereco', cidade ='$cidade', estado ='$estado', telefone ='$telefone', porc_comissao =$porc_comissao WHERE cod_vendedor ='$cod_vendedor'";


//erro pra
$resultado = mysqli_query($conexao,$query) or die (mysqli_connect_error());

if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:blue'> deu bom</p>";
    header("Location: atualizarVendedor.php");
}else{
    $_SESSION['msg'] = "<p style='color:red'> deu ruim</p>";
    header("Location: atualizarVendedor.php");

}
mysqli_close($conexao);
?>