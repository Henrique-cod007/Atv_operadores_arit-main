<?php
// Supermercado
// Maria comprou 4 pacotes de arroz a R$ 20 e 6 pacotes de feijão a R$ 12.
// Variáveis: $arroz = 4; $feijao = 6; $precoArroz = 20; $precoFeijao = 12;
// Tarefa: Calcule o valor total e a diferença de preço entre os produtos.

$arroz = 4;
$feijao = 6;
$precoArroz = 20;
$precoFeijao = 12;

$valortotal_Arroz = $arroz * $precoArroz; 
$valorTotoal_Feijao = $feijao * $precoFeijao;

$valorTotal = $valortotal_Arroz + $valorTotoal_Feijao;
$diferenca = $precoArroz - $precoFeijao;

echo "O valor ta compra é {$valorTotal},A diferença dos preços dos produtos é {$diferenca}";
?>