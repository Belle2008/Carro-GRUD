<?php 
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
            <thead class= "exemplo">
            <tr>
                <td>1</td>
                <td>1</td>
                <td>R$2000</td>
                <td>Vermelho</td>
                <td>A22018E</td>
                <td></td>
                <td>
                    <a href="salvar-carros.php?id=" class="btn btn-edit">Editar</a>
                    <a href="" class="btn btn-delete">Excluir</a>
                </td>
            </tr> 
            <thead>
    </div>