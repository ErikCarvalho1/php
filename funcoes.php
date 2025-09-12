<?php 
require_once "db.php";

function formatarPreco(float $valor):string{
    return "R$ ". number_format($valor, 2, ",", ".");

}
//inserindo produtos
function InserirProduto(string $nome, float $preco):bool{
    $pdo = getConnection(); 
    $cmd = $pdo->prepare("INSERT INTO produtos (nome, preco) values(:nome, :preco)");
    return $cmd->execute([":nome"=>$nome, ":preco"=>$preco]);
}

//listando produtos...
function listarProdutos():array{
    $pdo = getConnection();
    $cmd = $pdo->query("select * from produtos order by id desc");
    return $cmd->fetchAll();
}

//listra produtos com id...
function buscarProdutoPorId(int $id):?array{
    $pdo = getConnection();
    $cmd =  $pdo->prepare("select * from produtos where id = :id");
    $cmd->execute([":id"=>$id]);
    $produto = $cmd->fetch();
    return $produto?:null;
}

// Editando o produto 
function editarProduto(int $id, string $nome, float $preco):bool{
    $pdo = getConnection();
    $cmd = $pdo->prepare("update produtos set nome = :nome, preco = :preco where id = :id");
    return $cmd->execute([":nome"=>$nome, ":preco"=>$preco, ":id"=>$id]);

}
// excluindo o produto 
function excuirProduto(int $id):bool{
    $pdo =getConnection();
    $cmd = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    return $cmd->execute([":id" => $id]);
}
?>