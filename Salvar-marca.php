<?php 
include_once './include/index.php';
include_once './include/conexao.php';
?>
<main>
<?php

//preencher vazio
$id = '';
$Nome = '';


//teste para verificar se existe o id na url
if( isset($_GET['id'])){
  // pega o id
  $id = $_GET['id'];
  // montar o SQL para pegar os dados exclusivos do ID
  $sql = 'SELECT * FROM marcas WHERE MarcaID = '.$id;
  // executa o sql e mostra o resultado
  $resultado = mysqli_query($conexao, $sql);
  // converte os dados no array
  $dados = mysqli_fetch_assoc($resultado);
  $Nome = $dados['Nome'];
}
?>
  <div id="Marcas" class="tela">
    <form class="Crud-form" action="./action/Marca.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="acao" value="salvar">

        <h2>Cadastro de Marcas</h2>
      <input type="text" placeholder="Nome" name="Nome" value="<?php echo $Nome?>">
      <button type="submit">Salvar</button>
        </select>
    </form>
  </div>
  </main>
