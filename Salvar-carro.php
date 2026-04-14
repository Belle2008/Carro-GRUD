<?php 
include_once './include/index.php';
include_once './include/conexao.php';
?>
  <main>
<?php

//preencher vazio
$id = '';
$Preco = '';
$Cor = '';
$Placa = '';
$Descricao = '';
$ModeloID = '';

//teste para verificar se existe o id na url
if( isset($_GET['id'])){
  // pega o id
  $id = $_GET['id'];
  // montar o SQL para pegar os dados exclusivos do ID
  $sql = 'SELECT * FROM carros WHERE CarroID = '.$id;
  // executa o sql e mostra o resultado
  $resultado = mysqli_query($conexao, $sql);
  // converte os dados no array
  $dados = mysqli_fetch_assoc($resultado);
  $Preco = $dados['Preco'];
  $Cor = $dados['Cor'];
  $Placa = $dados['Placa'];
  $Descricao = $dados['Descricao'];
  $ModeloID = $dados['ModeloID'];
}
?>
  <div id="Carros" class="tela">
    <form class="Crud-form" action="./action/Carro.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="hidden" name="acao" value="salvar">

        <h2>Cadastro de Carros</h2>
        <input type="text" name="Preco" placeholder="Preço"  value="<?php echo 'R$ '.number_format((float)$Preco, 2, ',', '.'); ?>">
      <input type="text" placeholder="Cor" name="Cor" value="<?php echo $Cor?>">
      <input type="text" placeholder="Placa" name="Placa" value="<?php echo $Placa?>">
      <textarea name="Descricao" placeholder="Descrição"><?php echo $Descricao; ?></textarea>

      <?php
        $sql = 'SELECT * FROM modelos;';
        $resultado = mysqli_query($conexao,$sql);
        ?>
        <select name="ModeloID" id="">
            <option value=""></option>
            <?php
            while ($row = mysqli_fetch_assoc($resultado)) {
                $selecionado = '';
                if ($row['ModeloID'] == $ModeloID) {
                    $selecionado = 'selected';
                }
                echo '<option '.$selecionado.' value="'.$row['ModeloID'].'">'.$row['Nome'].'</option>';
            }
            ?>
        </select>
        <button type="submit">Salvar</button>
    </form>
  </div>
  </main>
