<?php

$mensagem = "";
try {
    $pdo = new PDO("mysql:host=10.91.47.99;dbname=modelophp_db","root", "123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['email'])) {
        $nome  = $_POST['nome'];
        $email = $_POST['email'];


        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, datacad) VALUES (:nome, :email, NOW())");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':senha', $senha);

        if ($stmt->execute()) {
            $mensagem = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
        } else {
            $mensagem = "<div class='alert alert-danger'>Erro ao cadastrar usuário.</div>";
        }
    }
} catch (PDOException $e) {
    $mensagem = "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
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
</div>