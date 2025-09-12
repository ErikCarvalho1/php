<?php
  require_once "funcoes.php";
    //Ações do cadastro (insert,  select, update , delete - crud)
    if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["inserir"])){
        InserirProduto($_POST["nome"],(float) $_POST["preco"]);

    }
    if(isset($_POST["editar"])){
        editarProduto((int)$_POST["id"], $_POST["nome"],(float)$_POST["preco"]);

    } 
    
    }
if(isset($_GET["excluir"])){
    excuirProduto((int)$_GET["excluir"]);
    }

    $produtos = listarProdutos();
 
  



?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
 
    <h2>Cadastro de Produtos</h2>
    <form method="POST" class="mb-3">
        <input type="text" name="nome" placeholder="Nome do produto" required class="form-control mb-2">
        <input type="number" step="0.01" name="preco" placeholder="Preço" required class="form-control mb-2">
        <button type="submit" name="inserir" class="btn btn-success">Inserir</button>
    </form>
 
    <h3>Lista de Produtos</h3>
    <table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Peço</th>
        <th>Data Cad</th>
        <th>Ações</th>
    </tr>
    <?php foreach($produtos as $produto):    ?>
    <tr>
        <td><?= $produto['id'] ?></td>
        <td><?= htmlspecialchars( $produto['nome']) ?></td>
        <td><?= formatarPreco($produto['preco']) ?></td>
        <td><?= date("d/m/Y h:i", strtotime($produto['datacad']))?></td>
        <td >
            <a href="editar.php?id=<?= $produto['id']?> " class="btn btn-warning  btn-sm">Editar</a>
            <a href="?excluir=<?= $produto['id']?>" class="btn btn-danger btn-sm" onclick ="return confirm('Excluir Produto?')">Excluir</a>
        </td>
    </tr>
    
    <?php endforeach; ?> 
    

    </table>
 
</body>
</html>