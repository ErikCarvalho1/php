-------------------------------Arrays--------------------
<br>

<?php 
    $nomes = [];
    $nomes[]="Ana";
    $nomes[]="julia";
    $nomes[]="Armaldo";
    $nomes[]="Fernanda";
    $nomes[]="Fafa";
foreach ($nomes as $nome){
    echo "$nome <br>";
}
echo "<br><br>";  

$usuarios = [];
$usuarios[] = ["nome" => "josé", "idade" => 25 ];
$usuarios[] = ["nome" => "lucia", "idade" => 32 ];

foreach ($usuarios as $user ){
    echo "Nome: ".$user["nome"]." - Idade: ".$user["idade"]. "<br>";
}
echo "<br><br>";
$formDados = [];
if($_POST){
    $formDados['nome'] = $_POST['nome'];
    $formDados['telefone'] = $_POST['telefone'];
    setcookie("formdados", json_encode($formDados), time() + 3600); 
}

if(!isset($formDados)){
    $formDados = [];

}else{
    $formDados = json_decode($_COOKIE['formadados'], true);

}
foreach($formDados as $key => $cad){
    echo "{$key}: {$cad} <br>";
}
?>

<form action="" method="post">
    Nome: <input type="text" name="nome" >
    <br>
    <br>
    Telefone: <input type="tel" name="telefone" >
    <input type="submit" value="Gravar">

</form>