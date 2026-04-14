<?php 
include_once './include/index.php';
include_once './include/conexao.php';
?>
  <main>
<?php

//preencher vazio
$id = '';
$Nome = '';
$TipoDeCarro = '';
$MarcaID = '';

//teste para verificar se existe o id na url
if( isset($_GET['id'])){
  // pega o id
  $id = $_GET['id'];
  // montar o SQL para pegar os dados exclusivos do ID
  $sql = 'SELECT * FROM modelos WHERE ModeloID = '.$id;
  // executa o sql e mostra o resultado
  $resultado = mysqli_query($conexao, $sql);
  // converte os dados no array
  $dados = mysqli_fetch_assoc($resultado);
  $Nome = $dados['Nome'];
  $TipoDeCarro = $dados['TipoDeCarro'];
  $MarcaID = $dados['MarcaID'];
}
?>
  <div id="Modelos" class="tela">
    <form class="Crud-form" action="./action/Modelo.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="acao" value="salvar">

        <h2>Cadastro de Modelo</h2>
        <input type="text" name="Nome" placeholder="Nome"  value="<?php echo $Nome?>">
      <input type="text" placeholder="Tipo De Carro" name="TipoDeCarro" value="<?php echo $TipoDeCarro?>">
      <?php
        $sql = 'SELECT * FROM marcas;';
        $resultado = mysqli_query($conexao,$sql);
        ?>
        <select name="MarcaID" id="">
            <option value=""></option>
            <?php
            while ($row = mysqli_fetch_assoc($resultado)) {
                $selecionado = '';
                if ($row['MarcaID'] == $MarcaID) {
                    $selecionado = 'selected';
                }
                echo '<option '.$selecionado.' value="'.$row['MarcaID'].'">'.$row['Nome'].'</option>';
            }
            ?>
        </select>
        <button type="submit">Salvar</button>
    </form>
  </div>
  </main>
