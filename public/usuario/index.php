<?php
require_once __DIR__ . '/../../app/config/conexao.php';
require_once __DIR__ . '/../../app/config/auth.php';

$paginaAtual = "inicio";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/css/home-usuario.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <title>Página Inicial - Fast Food</title>
</head>

<body>
  <?php include '../../app/components/header.php'; ?>

  <main class="container">
    <h1>Página Principal</h1>

    <div class="produtos">
      <!-- Produto fake 1 -->
      <div class="produto">
        <img width="200" src="/assets/imgs/produtos/fake-donut.jpg" alt="Donut de Chocolate">
        <h3>Donut de Chocolate</h3>
        <p>Massa macia com cobertura de chocolate meio amargo.</p>
        <h4>R$ 12,90</h4>
        <button type="button" onclick="alert('Demo estática: nada será adicionado ao carrinho.'); return false;">
          Adicionar
        </button>
      </div>


    </div>
  </main>

  <?php include '../../app/components/footer.php'; ?>

</body>

</html>