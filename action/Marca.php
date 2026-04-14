<?php 
include_once '../include/conexao.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao) {
    case 'excluir':
        //montar o SQL que exclui o registro PEGAR O ID
        $sql = 'DELETE FROM Marcas WHERE MarcaID ='.$id;
        //executar o SQL
        $resultado = mysqli_query($conexao, $sql);
        header("Location:../lista-marca.php");
        break;

    case 'salvar':
    $Nome = $_POST['Nome'];

    if (empty($id)) {
        // INSERT
        $sql = "INSERT INTO Marcas (Nome) 
                VALUES ('{$Nome}')";
    } else {
        // UPDATE
        $sql = "UPDATE Marcas 
                   SET Nome = '{$Nome}' 
                 WHERE MarcaID = $id";
    }
    mysqli_query($conexao, $sql);
    header("Location: ../lista-marca.php");
    break;

default:
    # code...
    break;
}
?>





