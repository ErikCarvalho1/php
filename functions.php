<?php 
// esta função formata valores em reais como string 
function formatarPreco(float $valor):string{
    return "R$ ".number_format($valor,2,",",".");
};

//estafunção gera um codigo 
function    gerarCodigo(string $prefixo, int $id ):string{
    return strtoupper($prefixo).str_pad($id, 5, "0 ",  STR_PAD_LAFT);
}


?>