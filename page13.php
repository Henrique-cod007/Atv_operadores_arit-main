<?php
// Loja vende um produto por R$ 120, custando R$ 80.
// Variáveis: $precoVenda = 120; $custo = 80;
// Tarefa: Calcule o lucro e o percentual de lucro.

$precoVenda = 120;
$custo = 80;

$lucro = $precoVenda - $custo;
$percentualLucro = ($lucro / $custo) * 100;

echo "Lucro: R$ {$lucro}<br>";
echo "Percentual de lucro: {$percentualLucro}";
?>