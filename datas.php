<?php 
// definindo time zone para America/Sao_Paulo	
date_default_timezone_set('America/Sao_Paulo');
$dataHoje = new DateTime() ;
echo "Hoje: ".$dataHoje->format('d/m/y h:i:s e')."<br>";

$prazo = new DateTime();
$prazo->modify("+7 days");
echo "Entrega prevista para ".$prazo->format('f/m/y')."<br>";


// diferença entre datas   
$dataVencimento = new DateTime('2025-09-01');
$dataPagamento = new DateTime('2025-09-15');
$diaAtraso = $dataVencimento->diff($dataPagamento);
echo "O pagamento foi realizado com $diaAtraso dias de atraso. <br>";


?>