<?php 
# EX1 
$idade = 20;
echo "idade: $idade <br>";

#EX2
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}

#EX 3  - igual ao EX 2

#EX 4
$n = 5;
if ($n % 2 == 0 ) {
    echo "Número par";
} else {
    echo "Número ímpar";
}
echo "<br>";

# Ex 5 
$n1 = 1;
$n2 = 6;
$n3 = 9;
$media =  $n1 +  $n2 +  $n3 / 3;
if ($media >= 7) {
    echo "Aprovado";

if ($media >= 5) {
    echo "Recuperação";
    
}
} else {
    echo "Reprovado";
}

#ex 6 
for ($i=1; $i <= 10 ; $i++) { 
    echo "$i <br>";

}

#ex 7 Crie um laço que imprima todos os números pares de 0 a 20.
for ($i=0; $i <= 20 ; $i++) { 
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
}

# ex  Peça ao usuário para digitar uma senha. Use um laço while para continuar pedindo a senha até que a senha correta seja inserida.
$senhaCorreta = "12345";
$senhaDigitada = "12345";
while ($senhaDigitada == $senhaCorreta) {
    echo "Acesso concedido.<br>";
    $senhaDigitada = "1245"; 
    if ($senhaDigitada == $senhaCorreta) {
        echo "Senha incorreta. Tente novamente.<br>";
    }
}

# ex 9 Crie um programa que some todos os números de 1 a 100 usando um laço for.
$soma = 0;
for ($i=1; $i <= 100 ; $i++) { 
    $soma += $i;
}
echo "A soma de 1 a 100 é: $soma <br>";

# ex 10 Crie um array com 5 nomes e imprima cada um deles usando um laço de repetição (foreach).
$nome = ["Erik", "Carvalho", "Silva", "Santos", "Oliveira"];
foreach ($nome as $n) {
    echo "$n <br>";
}
# ex 11 Crie um programa que receba a temperatura em Celsius e converta para Fahrenheit, imprimindo o resultado. Use a fórmula: F = (C * 9/5) + 32.
$c = 20;
$f = $f = $c * 9/5 + 32;
echo $f;
echo "<br>";

# ex 12 Crie um programa que verifique se uma string fornecida pelo usuário é um palíndromo (lê-se da mesma forma de trás para frente).
$palindromo = "arara";
$invertido = strrev($palindromo);
if ($palindromo == $invertido) {
    echo "$palindromo é um palíndromo.<br>";
} else {
    echo "$palindromo não é um palíndromo.<br>";
}
echo "<br>";


#ex 13 Crie um programa que encontre o maior e o menor valor em um array de inteiros.  a
$inteiros = ['1', '2' , '3' ];
$maior = max($inteiros);
$menor = min($inteiros);
echo "O maior valor é: $maior <br>";

# 14 Use um laço do-while para pedir um número entre 1 e 10. Continue pedindo até que o usuário digite um valor válido.
$numero = 0;
do {
    $numero = 5; 
    if ($numero < 1 || $numero > 10) {
        echo "Número inválido. Tente novamente.<br>";
    }
} while ($numero < 1 || $numero > 10);
echo "Número válido: $numero <br>";
echo "<br>";

#15 Crie um jogo de adivinhação. O script "escolhe" um número entre 1 e 100, e o usuário tenta adivinhar, recebendo dicas de "maior" ou "menor" a cada tentativa.e
// ------------------------------------------------------------------------------------
$numeroSecreto = 42; 
$tentativa = 0;
while ($tentativa != $numeroSecreto) {
    $tentativa = 42; 
    if ($tentativa < $numeroSecreto) {
        echo "Tente um número maior.<br>";
    } elseif ($tentativa > $numeroSecreto) {
        echo "Tente um número menor.<br>";
    } else {
        echo "Parabéns! Você adivinhou o número $numeroSecreto.<br>";
    }
}
echo "<br>";


# 16 Crie um programa que imprima a tabuada de um número fornecido pelo usuário.
$tabuada = 5;
for ($i=1; $i <= 10 ; $i++) {   
    $resultado = $tabuada * $i;
    echo "$tabuada x $i = $resultado <br>";
}
echo "<br>";


#17 Declare um array com 10 inteiros e preencha-o com valores aleatórios. Em seguida, use um laço para imprimir a soma de todos os elementos.
$valores = [];
for ($i=0; $i < 10 ; $i++) { 
    $valores[] = rand(1, 100); 
}   
$soma = array_sum($valores);
echo "A soma dos valores é: $soma <br>";
echo "<br>";

#18 Crie um laço de repetição aninhado para imprimir um padrão de asteriscos em formato de pirâmide.

#19Crie um programa que conte quantas vogais existem em uma string fornecida pelo usuário.
$frase = "Exemplo de frase";
$vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
$contador = 0;  
for ($i=0; $i < strlen($frase) ; $i++) { 
    if (in_array($frase[$i], $vogais)) {
        $contador++;
    }
}
echo "A frase contém $contador vogais.<br>";
echo "<br>";

# 20 Peça ao usuário que digite vários nomes. Armazene-os em um array e, quando o usuário digitar "fim", imprima a lista completa de nomes.
$nomes = ['eik', 'maria', 'joão'];
$entrada = "";  
while ($entrada != "fim") {
    $entrada = "Erik"; 
    if ($entrada != "fim") {
        $nomes[] = $entrada;
    }
}
echo "Nomes digitados: " . implode(", ", $nomes) . "<br>";
echo "<br>";
?>


