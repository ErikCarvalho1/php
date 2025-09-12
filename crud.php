<?php 
require_once "funcoes.php";


$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome  = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? 0;

    if (InserirProduto($nome, (float)$preco)) {
        $mensagem = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
    } else {
        $mensagem = "<div class='alert alert-danger'>Erro ao cadastrar produto.</div>";
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-body">
      <h3 class="card-title">Cadastro de Produto</h3>
      
      <!-- Mensagem de feedback -->
      <?= $mensagem ?>

      <!-- Formulário -->
      <form method="POST">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome do Produto</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
          <label for="preco" class="form-label">Preço</label>
          <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
