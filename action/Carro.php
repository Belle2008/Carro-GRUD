<?php 
include_once '../include/conexao.php';

//captura a ação dos dados
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao) {
    case 'excluir':
        //montar o SQL que exclui o registro PEGAR O ID
        $sql = 'DELETE FROM Carros WHERE CarroID ='.$id;
        //executar o SQL
        $resultado = mysqli_query($conexao, $sql);
        header("Location: ../lista-carro.php");
   break;

case 'salvar':
    $Preco = $_POST['Preco'];
    $Cor = $_POST['Cor'];
    $Placa = $_POST['Placa'];
    $Descricao = $_POST['Descricao'];
    $ModeloID = $_POST['ModeloID'];

    $Preco= str_replace('.', '', $Preco);
    $Preco = str_replace(',', '.', $Preco);
    $Preco  = trim(str_replace('R$','',$Preco));

    if (empty($id)) {
        // INSERT
        $sql = "INSERT INTO Carros (Preco, Cor, Placa, Descricao, ModeloID) 
                VALUES ('{$Preco}', '{$Cor}', '{$Placa}', '{$Descricao}', '{$ModeloID}')";
    } else {
        // UPDATE
        $sql = "UPDATE Carros 
                   SET Preco = '{$Preco}', 
                       Cor = '{$Cor}', 
                       Placa = '{$Placa}', 
                       Descricao = '{$Descricao}', 
                       ModeloID = '{$ModeloID}'
                 WHERE CarroID = $id";
    }

    mysqli_query($conexao, $sql);
    header("Location: ../lista-carro.php");
    break;

default:
    # code...
    break;
}
?>





