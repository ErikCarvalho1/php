<form  method="get"> 
    Nome: <input type="text" name="nome" >
    <br>
    <br>
    senha: <input type="password" name="senha" >
    <input type="submit" value="enviar">
</form>

<?php

//print_r($_GET);

if(isset($_GET['nome'])){
    echo "Olá ".$_GET['nome'];
      echo "A senha digitada foi: ".$_GET['senha'];
} 
?>

<br>
--------------------------------
<br>
<form  method="post">
    Email: <input type="email" name="email" >
    <br>
    <br>
    Toquem: <input type="password" name="token" >
    <input type="submit" value="enviar">
</form>
<?php 
if(isset($_POST['email'])){
    echo 'Seu email é: '.$_POST['email'];
     echo '<br>Seu token é: '.$_POST['token'];
} 

?>

<br>
--------------------------------
<br>


<form  method="post">
    Idade: <input type="number" name="idade">
      <input type="submit" value="enviar">
</form>

<?php 
if(isset($_REQUEST['idade'])){
    echo "Idade Recebida: ".$_REQUEST['idade'];
}
?>


<br>
--------------Validação------------------
<br>
<form action = "dados.php" method="post">
 Usuario: <input type="text" name="usuario"> 
 <input type="submit" value="Login">

</form>
<br>
--------------------------------
<br>

<?php 
 $nedereco = "http://republicavirtual.com.br/web_cep.php?cep=08225380&formato=json";
 print_r($nedereco);
?>

<br>
--------------------------------
<br>

<form action="" method="post">
    Selecione Seus Cursos: <br>
    <br>
    <input type="checkbox" name="cursos[]" value="PHP">PHP <br>
     <input type="checkbox" name="cursos[]" value="C#">C# <br>
      <input type="checkbox" name="cursos[]" value="HTML">HTML <br>
       <input type="checkbox" name="cursos[]" value="JS">JS <br>
       <input type="submit" value="Enviar">

</form>

<?php 
print_r($_POST['cursos']);
if (isset($_POST['cursos'])){
    foreach ($_POST['cursos'] as $curso)
        echo "Curso escolhido: ". $curso  . "<br>";
}
?>