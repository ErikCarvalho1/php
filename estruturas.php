
<?php

//estruturas condicionais (if, if...else, if...elseif...else, switch, ?: (ternario), null - ?? (coalecencia) )

#EX 1

$idade = 18 ; 
if ($idade >= 18) {
    echo "voce é maior de idade.";
} 
echo "<br>";

#EX 2

$n = 5;
if ($n % 2 == 0 ) {
    echo "Número par";
} else {
    echo "Número ímpar";
}
echo "<br>";

#EX 3

$nota = 7;
if ($nota >= 9) {
    echo "Exelente";
} elseif ($nota >= 6) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
echo "<br>";

#EX 4 

$dia = 3;
switch ($dia) {
    case 1:
        echo "Domingo";
        break;
     case 2:
        echo "Segunda";
        break;
            case 3:
        echo "Terça";
        break;
    default:
        echo "2outro dia da semana";
        break;
}
echo "<br>";

# EX 5

$login = true ;
echo $login ? "Bem Vindo!" : "Acesso Negado! ";
echo "<br>";

# EX 6

// if(!isset($login)){
//     echo "Avariavel login nao tem um valor atribuido";
// }

$nome = $_GET['nome'] ?? "Visitante"; //coalecencia
echo "Olá $nome";
echo "<br>";

?>
<form action="estruturas.php" method="get">
<input type="text" name="nome" id="" placeholder="Digite o nome"> 
<button type="submit">Entrar</button>

</form>

<?php 
#laços de repetição - while, do...while, for, foreach, controle de laço (break e continiue)
#EX 1

$i = 1;
while ($i <=  5 ){
    echo "contando: $i <br>";
    $i++;
}   
echo "<br>";

#EX 2

$j  =  1;
do {
echO "Número $j - ";
 $j++;    
}while($j < 8);
echo "<br>";
#EX 3

for ($k = 1; $k <= 5; $k++){
    echo "Valor: $k <br>";
}

#EX 4 

$frutas = ["nome" => "Maça", "Pera", "Banana", "Laranja"];
foreach($frutas as $key => $value){
    echo "$key: $value <br>";
} 
echo "<br>";

$carros = ["fusca", "Gol", "corsa", "kombi"];
foreach($carros as $carro){
    echo "carro: $carro <br>"; 
}
echo "<br>";
#EX 5
for ($k  = 1; $k <= 5; $k++){
    if ($k == 2)
        continue; //pula o valor 2
      if ($k == 4)
        break; //interrompe o laço quando chegar no valor 4 
    
    echo "Valor: $k <br>";
}

echo "<br>";


?>
<?php 
//matrizes No PHP 
//Arrays indexzados, associativos e multidimensionai
//funcoes para arrays ( count, ARRAY_VALUES, in_array, array_key_exists, sort asort, rsort, )

#EX 1 - SIMPLES 

$numeros = [10,20,30]; 
echo $numeros[0]; 
echo "<br>";

#EX 2 - ASSOCIATIVO
$veiculos = ['Tipo' => 'Carro', 'Marca' => 'Toyota', 'Modelo' => 'Corrolla', 'Ano' => 2022];
echo $veiculos['Marca'];
echo "<br>";
#EX 3 - MULTIDIMENSIONAL
$alunos = [
    ['Nome' => 'Ana', 'Idade' => '19'],
    ['Nome' => 'Bruno', 'Idade' => '21'],
    ['Nome' => 'Carlos', 'Idade' => '20'],
];
echo $alunos[1]['Nome'];    
echo "<br>";
echo "<br>";
#EX 4 - Usando count
$cores =['Vermelho', 'Azul', 'Verde', 'Amarelo'];
echo "Quandidade: " . count($cores);

echo "<br>";

#EX 5 - Usando array_push
$animais = ['Cachorro', 'Gato'];
array_push($animais, 'Passaro'); //inserido no final do array via array_push
print_r($animais);

echo "<br>";

#ex 6 - Usando array
$valores = [5,3,9,1,7,4];
sort($valores); //ordena os valores em ordem crescente
print_r($valores);
?>









































