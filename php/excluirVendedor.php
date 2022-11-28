<?php

session_start();

include("conexaoBanco.php");

$id = $_GET['cod_vendedor'];

$query = "DELETE FROM tb_vendedor where cod_vendedor = '$id'";
$result = mysqli_query($conexao, $query);

if ($result) {
	echo "Sucesso Remover Vendedor";
} else {
	echo "ERRO não executada a  $query " . mysqli_error($conexao);
}
mysqli_close($conexao);


?>