<?php

session_start();

include("conexaoBanco.php");

$id = $_GET['cod_prod'];

$query = "DELETE FROM tb_produtos where cod_prod = '$id'";
$result = mysqli_query($conexao, $query);

if ($result) {
	echo "Sucesso Remover Produto";
} else {
	echo "ERRO não executada a  $query " . mysqli_error($conexao);
}
mysqli_close($conexao);


?>


