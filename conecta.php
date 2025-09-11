<?php

function abrirBanco() {
    $host = "10.91.47.99";    
    $dbname = "modelophp_db"; 
    $usuario = "root";        
    $senha = "123"; 

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco: " . $e->getMessage());
    }
}
?>

<?php 
    $pdo = abrirBanco();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['email'])) {
        $nome  = $_POST['nome'];
        $email = $_POST['email'];


        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, datacad) VALUES (:nome, :email, NOW())");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
    

        if ($stmt->execute()) {
            $mensagem = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-danger'>Erro ao cadastrar usuário.</div>";
        }
    }
?>

<?php 
$pdo = abrirBanco();
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['preco'])){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco) VALUES (:nome, :preco)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);

    if ($stmt->execute()) {
            $msgProduto = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
        } else {
            $msgProduto = "<div class='alert alert-danger'>Erro ao cadastrar usuário.</div>";
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
 
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Card do formulário -->
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Cadastro de Usuários</h4>
                </div>
                <div class="card-body">
                    <?php if (!empty($mensagem)) echo $mensagem; ?>
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                       
                        <button type="submit" name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------     PRODUTO   ------------------------------------------------------------------- -->
    <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>CAdastro de produtos</h4>
                </div>
                <div class="card-body">
                    <?php if (!empty($msgProduto)) echo $msgProduto; ?>
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Nome do Produto</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Preço</label>
                            <input type="number" name="preco" class="form-control" required>
                        </div>
                       
                        <button type="submit" name="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
                    </form>
                </div>
            </div>
</div>




<?php

$pdo = abrirBanco();

    $stmt = $pdo->prepare("select * from produtos LIMIT 5");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);

    if ($stmt->execute()) {
            $msgProduto = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
        } else {
            $msgProduto = "<div class='alert alert-danger'>Erro ao cadastrar usuário.</div>";
        }
    

?>

?>