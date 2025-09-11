
<?php
//1 
echo "<strong>Exercícios de Manipulação de Strings</strong><br>";
echo "<strong>#1</strong><br>";
$nomeUsuario = "erik carvalho da silva";
$descricaoServ = "desc dfesc srescd desc ";

$nomeFormatado = ucfirst(trim($nomeUsuario));
echo "Nome Formatado: $nomeFormatado<br>";

$descFormat = strtolower(str_replace(" ","-",trim($descricaoServ)));
echo $descFormat.'<br>';

?>
<?php echo "<br>"    ?>
<?php 
//2 
echo "<strong>#2</strong><br>";
function formatarParaUrl($texto){
 $texto = iconv("UTF-8", "ASCII//TRANSLIT", $texto);
 $texto = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $texto);
 $texto = preg_replace("/[\/_| -]+/", '-', $texto);
 $texto = strtolower($texto);
 return $texto; 

}

$exemploTx = "Câmera Fotográfica Profissional X-T100!";
echo formatarParaUrl($exemploTx);
echo "<br>";
?>

<?php
#3  
echo "<strong>#3</strong><br>";
$valor = 46488849816;
function ValidadorDeCpf_Cnpj($valor){
    $valor = preg_replace('/\D/', '', $valor);
    if (strlen($valor)  == 11){
              return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $valor);
            
            

    }
    elseif (strlen($valor) == 11){
            return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $valor);
    }
    
    else {
        return $valor;
    }
}
echo ValidadorDeCpf_Cnpj($valor);
   
echo "<br>";
?>
<?php echo "<hr>"?>

<?php 
echo "<strong>Exercícios de Datas</strong><br>";
echo "<strong>#1:</strong><br>";
$dataDeCadastro = new DateTime();
$dataDeExpiracao = clone $dataDeCadastro;
$dataDeExpiracao->modify('+30 days');

$hoje = new DateTime(); 
$diasRestantes = $hoje->diff($dataDeExpiracao)->days;

echo "Data de cadastro : ". $dataDeCadastro->format('d/m/Y')."<br>";
echo "Data de expiração : ". $dataDeExpiracao->format('d/m/Y')."<br>";
echo "Dias restantes : $diasRestantes dias<br>";
echo "<br>";
?>


    <?php 
    # 4
    $dataCadastro = new DateTime(); 
$dataExpiracao = clone $dataCadastro;
$dataExpiracao->modify('+30 days');

$hoje = new DateTime();
$diasRestantes = $hoje->diff($dataExpiracao)->days;

echo "Data de cadastro: " . $dataCadastro->format('d/m/Y') . "<br>";
echo "Data de expiração: " . $dataExpiracao->format('d/m/Y') . "<br>";
echo "Faltam $diasRestantes dias para expirar.<br>";
?>


<?php
#5
echo "<strong>#2</strong><br>";

$dataInicial = new DateTime();
echo "Data inicial do contrado: ".$dataInicial->format('d/m/y')."<br>";
echo "Próximos 6 vencimentos mensais:<br>";

for ($i = 1; $i <= 6; $i++){
    $vencimento = clone  $dataInicial; 
    $vencimento->modify("+$i month" );
    echo $vencimento->format('d/m/y') . "<br>";
}
?>



<?php
#EX6
echo "<br>";
echo "<strong>#3</strong><br>";


$dataVencimentoInput = '2025-05-06'; 
$dataAtual = new DateTime();
$dataVencimento = new DateTime( $dataVencimentoInput);

if ($dataVencimento >= $dataAtual) {
    $diasRestantes = $dataAtual->diff($dataVencimento)->days;
    echo "O boleto ainda está no prazo. Faltam $diasRestantes dias para o vencimento.<br>";
} else {
    $diasAtraso = $dataVencimento->diff($dataAtual)->days;
    echo "O boleto está atrasado há $diasAtraso dias.<br>";
}
?>
<?php echo "<hr>"?>


<?php 
echo "<strong>Exercícios de Funções</strong><br>";
echo "<strong>#1</strong><br>";
$emailValido = "Erik@";
    $emailDigitado = "vaitpmandp@";
function ValidarEmail($emailValido){
    if ($emailValido == $emailDigitado){
        echo "Email Valido".$email;


    }
    else{
        echo "Email nao encontrado";
    }

    return $emailValido;  
    
    
}





?>

