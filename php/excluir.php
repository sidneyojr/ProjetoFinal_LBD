<?php

session_start();

    

include("conexaoBanco.php");

$id = $_GET['cod_cli'];


	    $query = "DELETE FROM tb_cliente where cod_cli = '$id'";
        $result = mysqli_query($conexao, $query);
            
            if($result){
    			echo "Sucesso Remover Cliente";
			} 
			else{
    				echo "ERRO não executada a  $query ". mysqli_error($conexao);
				}
		mysqli_close($conexao);




#$query = "DELETE FROM tb_cliente where cod_cli = '$id'";
#$result = mysqli_query($conexao, $query);

#if ($result) {
	#echo "Sucesso Remover Cliente";
#} else {
#	echo "ERRO não executada a  $query " . mysqli_error($conexao);
#}
#mysqli_close($conexao);


?>

