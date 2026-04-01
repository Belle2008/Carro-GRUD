<?php 
include_once '../include/conexao.php';

//captura a ação dos dados
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao) {
    case 'excluir':
        //montar o SQL que exclui o registro PEGAR O ID
        $sql = 'DELETE FROM Modelos WHERE ModeloID ='.$id;
        //executar o SQL
        $resultado = mysqli_query($conexao, $sql);
        header("Location:../lista-modelo.php");
}







?>