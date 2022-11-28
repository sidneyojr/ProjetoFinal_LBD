<?php
session_start();
include("conexaoBanco.php");
$cod_cli = $_POST['cod_cli'];
echo $cod_cli;
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$limit_cred = $_POST['limite_cred'];
$estado = strtoupper($estado);
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];

$query = "UPDATE tb_cliente SET nome='$nome', endereco='$endereco', telefone='$telefone', limite_cred='$limit_cred', cidade='$cidade', estado='$estado', cpf = '$cpf' WHERE cod_cli = '$cod_cli'";

#$result = "UPDATE tb_cliente SET nome='joao', endereco='fim do mundo', telefone='8879456', limite_cred='10000.00', cidade='nova', estado='MG', cpf = '09427535854' WHERE cod_cli = 1";

//erro pra
$resultado = mysqli_query($conexao, $query) or die(mysqli_connect_error());

if (mysqli_affected_rows($conexao)) {
    $_SESSION['msg'] = "<p style='color:blue'> deu bom</p>";
    header("Location: atualizarCliente.php");
} else {
    $_SESSION['msg'] = "<p style='color:blue'> deu ruim</p>";
    header("Location: atualizarCliente.php");

}
mysqli_close($conexao);
?>
