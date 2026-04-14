<?php 
include_once './include/index.php';
include_once './include/conexao.php';
?>

<main>
    <div class= "container">
       
        <a href="./salvar-modelo.php"  class= "btn btn-add">Incluir</a>
    <table id="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>MarcaID</th>
                <th>Nome</th>
                <th>Tipo De Carro</th>
                <th>Ações</th>
            </tr> 
            <thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM modelos';
                $resultado = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_assoc($resultado)) {
                ?>  
                <tr class="coluna">

                <td><?php echo $dados['ModeloID'];?></td>
                <td><?php echo $dados['MarcaID'];?></td>
                <td><?php echo $dados['Nome'];?></td>
                <td><?php echo $dados['TipoDeCarro'];?></td>
                <td>
                  <a href="Salvar-modelo.php?id=<?php echo $dados['ModeloID'];?>" class="btn btn-edit">Editar</a>
                  <a href="./action/Modelo.php?acao=excluir&id=<?php echo $dados['ModeloID'];?>" class="btn btn-delete">Excluir</a>
                </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
    <table>
    </div>
<main>