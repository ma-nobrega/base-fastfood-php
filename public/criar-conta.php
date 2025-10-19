<!-- /public/criar-conta.php (DEMO ESTÁTICA) -->
<?php
require_once __DIR__ . '/../app/config/conexao.php';
require_once __DIR__ . '/../app/config/auth.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="./assets/css/criar-conta.css">
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <title>Criar conta - Fast Food</title>
</head>

<body>
  <?php include "../app/components/header.php"; ?>

  <div class="container">
    <h1>Criar conta</h1>

    <form method="POST" action="#" novalidate>
      <label>Email</label>
      <input type="email" name="email" placeholder="seuemail@exemplo.com" required>

      <label>Nome Completo</label>
      <input type="text" name="nome" placeholder="Seu nome completo" required>

      <label>Endereço</label>
      <input type="text" name="logradouro" placeholder="Rua, avenida..." required>

      <label>Bairro</label>
      <input type="text" name="bairro" placeholder="Ex.: Centro" required>

      <label>Complemento</label>
      <input type="text" name="complemento" placeholder="Apto, bloco, casa... (opcional)">

      <label>Número</label>
      <input type="number" name="numero" placeholder="Ex.: 123" required>

      <label>Senha</label>
      <input type="password" name="senha" placeholder="Crie uma senha" required>

      <button type="submit">Cadastrar</button>

      <a href="login.php">Fazer Login</a>
      <a href="index.php">Página principal</a>
    </form>
  </div>

  <?php include "../app/components/footer.php"; ?>
</body>

</html>