<?php 
include_once './include/conexao.php';
include_once './include/index.php';
?>

<main>
    <div class= "container">
     
        <a href="./salvar-marcas.php"  class= "btn btn-add">Incluir</a>
    <table id="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            
            </tr> 
            <thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM marcas';
                $resultado = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_assoc($resultado)) {
                ?>  
                <tr class="coluna">

                <td><?php echo $dados['MarcaID'];?></td>
                <td><?php echo $dados['Nome'];?></td>
             
                <td>
                  <a href="salvar-marcas.php?id=" class="btn btn-edit">Editar</a>
                  <a href="./action/Marca.php?acao=excluir&id=<?php echo $dados['MarcaID'];?>" class="btn btn-delete">Excluir</a>
                </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
    <table>
    </div>
<main>