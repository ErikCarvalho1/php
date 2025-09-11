<?php 
# declaração  de variaveis do PHP
# $ 

$A123;
$x = 1; # = (atribuição) / == comparação / === (comparação absoluta tipo e valor)
$X = 2; # PHP é case sensitive (faz distinção entre maiusculo e minusculo)

echo $x.$X; #(.)concatena

$escola = "Senac";
$numero = 8266;
$valorOnibus  = 2.50;
$portaoAberto = true;
echo "estudo no $escola em $numero da Av Itaquera, e pago R$ $valorOnibus nam passagem. Aberto: $portaoAberto";

# Variaveis globais em PHP
  #echo imprime um string

# echo $_SERVER; <- jeito errado 
#print_r($_SESSION); #jeito certo 

# contante em PHP 

define("TESTE", "Conteudo de uma constante");
echo  TESTE;

# operadores no PHP 
echo "<br>";
$a = 2;
$b = 11; 
echo -$a."<br>";
echo $b."<br>";
echo "$a + $b =".$a+$b."<br>"; # adição 
echo "$a - $b =".$a-$b."<br>"; # subtração 
echo "$a x $b = ".$a*$b."<br>"; # multiplicação
echo "$a / $b =".$a/$b."<br>"; # divisão
echo "$a % $b =".$a%$b."<br>"; # resto da divisão (mod)
echo "$a ** $b =".$a**$b."<br>"; # esponenciação

teste

?>