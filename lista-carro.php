<?php 
include_once './include/conexao.php';
include_once './include/index.php';

?>

<main>
    <div class= "container">
       
        <a href="./salvar-carros.php"  class= "btn btn-add">Incluir</a>
    <table id="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>ModeloID</th>
                <th>Preço</th>
                <th>Cor</th>
                <th>Placa</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr> 
        <thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM carros';
                $resultado = mysqli_query($conexao, $sql);

                while ($dados = mysql_fetch_assoc($resultado)) {
                ?>  
                <tr>

                <td><?php echo $dados['CarroID'];?></td>
                <td><?php echo $dados['ModeloID'];?></td>
                <td><?php echo $dados['Preco'];?></td>
                <td><?php echo $dados['Cor'];?></td>
                <td><?php echo $dados['Placa'];?></td>
                <td><?php echo $dados['Descrição'];?></td>
                <td>
                  <a href="salvar-carros.php?id=" class="btn btn-edit">Editar</a>
                  <a href="" class="btn btn-delete">Excluir</a>
                </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
    <table>
    </div>
<main>