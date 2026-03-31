<?php 
include_once './include/index.php';
include_once './include/conexao.php';
?>

<main>
    <div class= "container">
       
        <a href="./salvar-modelos.php"  class= "btn btn-add">Incluir</a>
    <table id="tabela">
        <thead>
            <tr>
                <th>ID</th>
                <th>MarcaID</th>
                <th>Nome</th>
                <th>Tipo De Carro</th>
                <th>Ações</th>
            </tr> 
            <thead class= "exemplo">
            <tr>
                <td>1</td>
                <td>1</td>
                <td>Classe E</td>
                <td>Sedan de luxo</td>
                <td>
                    <a href="salvar-modelos.php?id=" class="btn btn-edit">Editar</a>
                    <a href="" class="btn btn-delete">Excluir</a>
                </td>
            </tr> 
            <thead>
    </div>