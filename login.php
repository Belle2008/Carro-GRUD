<?php 
include_once './include/index.php';
?>

<main>
    <div id="login" class="Quadrado">
     <form class="login-form" onsubmit="return login()">
        <h2>login</h2>
        <input type="text" id="usuario" placeholder="Usuário" required />
        <input type="password" id="senha" placeholder="Senha" required />
        <button type="submit">Entrar</button>
     </form>
    </div>