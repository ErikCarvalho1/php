<?php 
session_start();
if(!isset($_SESSION['cadastro'])){
    $_SESSION[ 'cadastro'] = [];

}
if(isset($_POST)){
    $_SESSION['cadastro'][] = [
        "nome" => $_POST ['nome'],
        "idade" => $_POST['idade']
    ];
}

echo "<h3>Cadastros</h3>";
if(isset($_SESSION['cadstro'])){}
foreach($_SESSION['cadastro'] as $cad)
    echo "Nome: {$cad['nome']} - Idade: {$cad['idade']}<br>" ;


if(isset($_POST['apagar'])){
    session_destroy();
}
?>




<form  method="post">   
    Nome: <input type="text" name="nome" >
    <br>
    <br>
    Idade: <input type="number" name="idade" >
    <input type="submit" value="cadastro">
</form>


<form action="" method="post">
    <input type="submit" value="APAGAR" name  = "apagar ">
</form>