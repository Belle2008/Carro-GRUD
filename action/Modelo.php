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
        break;

        case 'salvar':
            $Nome = $_POST['Nome'];
            $TipoDeCarro = $_POST['TipoDeCarro'];
            $MarcaID = $_POST['MarcaID'];
        
            if (empty($id)) {
                // INSERT
                $sql = "INSERT INTO modelos (Nome, TipoDeCarro, MarcaID) 
                        VALUES ('{$Nome}', '{$TipoDeCarro}', '{$MarcaID}')";
            } else {
                // UPDATE
                $sql = "UPDATE Modelos 
                           SET Nome = '{$Nome}', 
                               TipoDeCarro = '{$TipoDeCarro}',  
                               MarcaID = '{$MarcaID}'
                         WHERE ModeloID = $id";
            }

            mysqli_query($conexao, $sql);
            header("Location: ../lista-modelo.php");
            break;
        
        default:
            # code...
            break;
        }
        ?>
        
        
        
        
        
        







