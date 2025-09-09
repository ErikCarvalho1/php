<?php 
    // funções para strings 

    $nomeProduto = "  notebook dell Inspirion   ";
    echo "Nome original: '$nomeProduto' <br>";

    $nomeFormatadoTrim = trim($nomeProduto); //remove espaço do começo e do fim 
     echo "Nome formatado: '$nomeFormatadoTrim' <br>";

    $nomeFormatado = ucfirst(trim($nomeProduto));
     echo "Nome formatado: '$nomeFormatado' <br>";

     $nomeFormatado = ucwords(trim($nomeProduto));
     echo "Nome formatado maiusculas: $nomeFormatado"."<br>"; 
    // echo  "A stirng possui ".strlne(trim($nomeProduto))."caracter";
    $email = "erik02145silvaAntonio@gmail.com";
    echo "Email digitado: ".strtolower(trim($email))."<br>";

    $frase = "Eu mandei você deitar 5 5 ";
    echo "ele falou para eu ".Substr(trim($frase),6)."<br>";

    $slug = strong(str_replace(" ","-",trim($nomeProduto)));
     echo $slug.'<br>';

     
  $explodido = explode(" ",trim($frase) );
  print_r($explodido)


?>