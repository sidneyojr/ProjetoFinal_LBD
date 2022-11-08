<?php
$servidor='localhost';
$usuario='root';
$senha='1234';
$db='db_loja';
$conexao = mysqli_connect($servidor,$usuario,$senha,$db);
if (!$conexao){
    print("Erro na conexão cim MySQL");
    print("Erro: ".mysqli_connect_erro());
    exit;
}
?>